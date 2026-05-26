<?php
namespace app\Http\Controllers;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller{
    public function explore(){
           
        return view('explore');
    }

    public function home(){
        return view('home');
    }

    public function login(){
        return view('login');
    }

    public function messages(){
        return view('messages');
    }

    public function notification(){
        return view('notification');
    }

    public function profile(){
        return view('profile');
    }

    public function reels(){
        return view('reels');
    }

    public function sign_up(){
        return view('sign_up');
    }

    public function welcome(){
        return view('welcome');
    }
}



