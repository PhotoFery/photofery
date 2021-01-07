<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Photographer;

class PhotographerController extends Controller
{

    public function photographercreateprocess (Request $request){
          $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:255|min:3',
            'phone' => 'required',
            'email' => 'required|email|unique:photographers,email',
            'password' => 'required',
            'c_password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->password === $request->c_password){
             try{
                Photographer::create([
                    'name' => $request->input('name'),
                    'phone' => $request->input('phone'),
                    'email' => $request->input('email'),
                    'password' => bcrypt($request->input('password')),
                    'c_password' => bcrypt($request->input('c_password')),
                    'email_verification_token' => uniqid(time().$request->input('email'), true).Str::random(4)
                ]);
                session()->flash('message', 'Registration successful!');
                 session()->flash('type', 'success');
               return redirect()->back();
              }catch(\Exception $e)
              {
                 session()->flash('message', $e->getMessage());
                 session()->flash('type', 'danger');

                 return redirect()->back();
               }
               }else {
                 session()->flash('message', 'Password not match!');
                 session()->flash('type', 'danger');

                 return redirect()->back();
               }
    }
public function photographerupdateprocess (Request $request, $id){
        $user = Photographer::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:255|min:3',
            'phone' => 'required|number',
            'email' => 'required|email|unique:photographers,email',
            'password' => 'required',
            'c_password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->password === $request->c_password){
             try{
                $user->update([
                    'name' => $request->input('name'),
                    'phone' => $request->input('phone'),
                    'email' => $request->input('email'),
                    'password' => bcrypt($request->input('password')),
                    'c_password' => bcrypt($request->input('c_password')),
                ]);
               return redirect()->route('photographerlist');
              }catch(\Exception $e)
              {
                 session()->flash('message', $e->getMessage());
                 session()->flash('type', 'danger');

                 return redirect()->back();
               }
               }else {
                 session()->flash('message', 'Password not match!');
                 session()->flash('type', 'danger');

                 return redirect()->back();
               }
    }
    public function photographerlist (){
    	$data = [];
        $data['photographerlists'] = Photographer::get();
        return view('backend.photographer.photographerlist', $data);
    }

    public function destroy($id)
    {
        $photographerlist = Photographer::find($id);

        $photographerlist->delete();
session()->flash('message', 'Delete!');
                 session()->flash('type', 'danger');
        return redirect()->back();

    }

}
