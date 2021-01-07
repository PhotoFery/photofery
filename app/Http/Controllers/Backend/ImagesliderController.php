<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Imageslider;

class ImagesliderController extends Controller
{
   public function Imageslidercreate (){
        
        return view('backend.imageslider.imageslidercreate');
    }
    public function imageslidercreateprocess (Request $request){
         $validator = Validator::make($request->all(), [
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->hasFile('image')){
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('images/slider'), $imageName);

            }

             try{
                Imageslider::create([
                    'image' => $imageName,
                ]);
               return redirect()->back();
              }catch(\Exception $e)
              {
                 session()->flash('message', $e->getMessage());
                 session()->flash('type', 'danger');

                 return redirect()->back();
               }
    }

    public function imagesliderlist (){
    	$data = [];
        $data['imagesliderlists'] = Imageslider::get();
        return view('backend.imageslider.imagesliderlist', $data);
    }

    public function destroy($id)
    {
        $imagesliderlist = Imageslider::find($id);

        $imagesliderlist->delete();
session()->flash('message', 'Delete!');
                 session()->flash('type', 'danger');
        return redirect()->back();

    }

}
