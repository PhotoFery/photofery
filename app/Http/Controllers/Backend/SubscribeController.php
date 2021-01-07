<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Subscribe;

class SubscribeController extends Controller
{

    public function subscribecreateprocess (Request $request){
         $validator = Validator::make($request->all(), [
            'subscribe_phone' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
             try{
                Subscribe::create([
                    'subscribe_phone' => $request->input('subscribe_phone')
                ]);
                session()->flash('message', 'Subscription successful!');
                 session()->flash('type', 'success');
               return redirect()->back();
              }catch(\Exception $e)
              {
                 session()->flash('message', $e->getMessage());
                 session()->flash('type', 'danger');

                 return redirect()->back();
               }
    }

    public function subscribelist (){
    	$data = [];
        $data['subscribelists'] = Subscribe::get();
        return view('backend.subscribe.subscribelist', $data);
    }

    public function destroy($id)
    {
        $subscribelist = Subscribe::find($id);

        $subscribelist->delete();
session()->flash('message', 'Delete!');
                 session()->flash('type', 'danger');
        return redirect()->back();

    }

}
