<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        return view('back.dashboard');
    }

    public function login(){
        return view('back.auth.login');
    }

    public function login_post(Request $request){
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.auth.login')->withErrors('Email veya parola hatalı.');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.auth.login');
    }

    public function register(){
        return view('back.auth.register');
    }

    public function forget(){
        return view('back.auth.forg_pass');
    }
}
