<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Symfony\Component\HttpFoundation\Cookie;

class AuthController extends Controller
{

    public function getLogin(){
        return view('auth.login');
    }

    public function getForgotPassword(){
        return view('auth.forgot-password');
    }

    public function getResetPassword(){
        return view('auth.reset-password');
    }

    public function login(Request $request){
        $request->validate([
            "email"=> "required|exists:users,email",
            "password" => 'required'
        ]);

        $user = User::where('email',$request->email)->first();
        if(password_verify($request->password,$user->password)){
            if($request->remember_me === "on"){
                $cookie = cookie('user_id', $user->id, 43800 /* 1 month */);
                return redirect('dashboard')->cookie($cookie);
            }else{
                $request->session()->put('user_id', $user->id);
                return redirect('dashboard');
            }
        }else{
            return redirect('login')->withErrors(["unautorized"=>"Wrong credentials!"])->withInput($request->input);
        }
    }
}
