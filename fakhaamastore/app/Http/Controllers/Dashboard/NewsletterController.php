<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletter;
class NewsletterController extends Controller
{
    public function index(){
        $data = [
            "newsletters" => Newsletter::all()
        ];
        return view("dashboard.newsletters",$data);
    }
}
