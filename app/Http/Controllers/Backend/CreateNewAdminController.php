<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\User;

class CreateNewAdminController extends Controller
{

	public function dashboard (){
         return view('backend.dashboard');
    }
    public function createadmin (){
         return view('backend.admin.createadmin');
    }

    public function createadminprocess (Request $request){
         $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:255|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'c_password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->password === $request->c_password){
             try{
                User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => bcrypt($request->input('password')),
                    'c_password' => bcrypt($request->input('c_password')),
                    'email_verification_token' => uniqid(time().$request->input('email'), true).Str::random(4)
                ]);
               return redirect()->route('createadminlist');
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

    public function createadminupdate ($id){
    	$data = [];
        $data['createadminlists'] = User::where('id', $id)->first();
          return view('backend.admin.createadminedit', $data);
    }

    public function createadminupdateprocess (Request $request, $id){
    	$user = User::find($id);
    	$validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-z A-Z]+$/u|max:255|min:3',
            'email' => 'required|email',
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
                    'email' => $request->input('email'),
                    'password' => bcrypt($request->input('password')),
                    'c_password' => bcrypt($request->input('c_password')),
                ]);
               return redirect()->route('createadminlist');
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
    public function createadminlist (){
    	$data = [];
        $data['createadminlists'] = User::get();
        return view('backend.admin.createadminlist', $data);
    }

    public function destroy(Request $request, $id)
    {
        $createadminlist = User::find($id);

        $createadminlist->delete();
session()->flash('message', 'Delete!');
                 session()->flash('type', 'danger');
        return redirect()->back();

    }

}
