<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\User;

class AuthController extends Controller
{
    public function showLoginForm (){

        if(auth()->check()){
            return redirect('dashboard');
        }

         return view('admin.login');
    }

    public function processLoginForm (Request $request){

        

    	$validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only(['email','password']);

        if(auth()->attempt($credentials)){
            return redirect()->route('dashboard');
        }else {
            session()->flash('message', 'Email and Password wrong!!!');
                 session()->flash('type', 'danger');

                 return redirect()->back();
        }
    }

    public function logout (){
        auth()->logout();
        return redirect()->route('login');
    }

}
