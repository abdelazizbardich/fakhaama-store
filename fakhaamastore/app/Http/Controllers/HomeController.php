<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'newProducts' => Product::orderBy('id','DESC')->limit(6)->get(),
            'categories' => Category::orderBy('id','DESC')->limit(3)->get()
        ];
        return view("home",$data);
    }
}
