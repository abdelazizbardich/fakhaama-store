<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index(){
        return view("dashboard.newsletters");
    }
}
