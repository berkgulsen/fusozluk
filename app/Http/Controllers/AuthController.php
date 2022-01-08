<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function loginPost(Request $request){
        if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('homepage');
        }
        return redirect()->route('login')->withErrors('Hata!');
    }

    public function registerPost(Request $request){
        $request->validate([
            'name'=>'min:8',
            'password'=>'min:8'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =Hash::make($request->password);
        $user->remember_token = $request->_token;
        $user->save();
        return redirect()->route('homepage');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('homepage');
    }

}
