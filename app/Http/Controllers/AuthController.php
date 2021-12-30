<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginPost(Request $request){
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('homepage');
        }
        return redirect()->route('login')->withErrors('Hata!');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('homepage');
    }

}
