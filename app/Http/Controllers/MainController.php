<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use App\User;
use App\Imageslider;

class MainController extends Controller
{
    public function index (){

        $data = [];
        $data['imagesliderlists'] = Imageslider::get();
        $data['api_response'] = Http::get('https://bikroyit.com/photofery/api/stats_for_web');

        return view('frontend.index', $data);

    }

    public function about (){
        return view('otherspages.about');
    }
    public function termscondition (){
        return view('otherspages.termscondition');
    }
    public function contact (){
        return view('otherspages.contact');
    }

}
