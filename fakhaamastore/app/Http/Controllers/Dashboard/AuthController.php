<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Cookie;

class AuthController extends Controller
{
    public function logout(Request $request){
        cookie('user_id', null, 0);
        $request->session()->forget('user_id');
        return redirect('login');
    }
}
