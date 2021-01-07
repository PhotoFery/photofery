<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Message;

class MessageController extends Controller
{

    public function messagecreateprocess (Request $request){
         $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:255|min:3',
            'email' => 'required|email',
            'message' => 'required|max:1000|min:3',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
             try{
                Message::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'message' => $request->input('message')
                ]);
                session()->flash('message', 'Message sent successfully!');
                session()->flash('type', 'success'); 
               return redirect()->back();
              }catch(\Exception $e)
              {
                 session()->flash('message', $e->getMessage());
                 session()->flash('type', 'danger');

                 return redirect()->back();
               }
    }

    public function messagelist (){
    	$data = [];
        $data['messagelists'] = Message::get();
        return view('backend.message.messagelist', $data);
    }

    public function destroy($id)
    {
        $subscribelist = Message::find($id);

        $subscribelist->delete();
session()->flash('message', 'Delete!');
                 session()->flash('type', 'danger');
        return redirect()->back();

    }

}
