<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        $data = [
            "users" => User::all()
        ];
        // dd($data);
        return view("dashboard.users",$data);
    }
}
