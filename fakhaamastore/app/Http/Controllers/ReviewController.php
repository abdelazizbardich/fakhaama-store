<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{


    public function save(Request $request){
        $request->validate([
            "feedback" => 'required',
            "name" => 'required',
            "email" => 'required',
            "rating" => 'required',
            "product_id" => 'required'
        ]);
        $review = Review::create([
            "feedback" => $request->feedback,
            "name" => $request->name,
            "email" => $request->email,
            "rating" => $request->rating,
            "product_id" => $request->product_id
        ]);
        return Redirect::to('product-details/'.$request->product_id);

    }
}
