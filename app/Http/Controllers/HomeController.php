<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderItem;

class HomeController extends Controller
{
    public function index(){
        $data = [
            'slider' => Product::where('home_slider',true)->orderBy('id','DESC')->limit(3)->get(),
            'newProducts' => Product::orderBy('id','DESC')->limit(12)->get(),
            'categories' => Category::orderBy('id','DESC')->limit(3)->get(),
            'topSale' => OrderItem::select('product_id')->with('product')->groupBy("product_id")->orderBy('product_id','DESC')->limit(6)->get()
        ];
        return view("home",$data);
    }
}
