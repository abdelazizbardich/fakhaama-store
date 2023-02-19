<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(){
        $data = [
            "reviews" => Review::all()
        ];
        return view("dashboard.reviews",$data);
    }
}
