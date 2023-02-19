<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{

    public function index(Product $product){
        $data = [
            "product" => $product,
            "relatedProducts" => Product::where('category_id',$product->category->id)->orderBy('id','DESC')->limit(3)->get()
        ];
        return view('product-details',$data);
    }
}
