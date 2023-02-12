<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\category;
use Storage;

class ProductController extends Controller
{

    public function index(){
        $data = [
            "products" => Product::all()
        ];
        return view("dashboard.products",$data);
    }

    public function create(){
        $data = [
            "categories" => Category::all()
        ];
        return view("dashboard.products-add",$data);
    }

    public function save(Request $request){
        $request->validate([
            "name" => 'required',
            "category" => 'required|exists:categories,id',
            "old_price" => 'required',
            "actual_price" => 'required',
            "weight" => 'required',
            "height" => 'required',
            "width" => 'required',
            "depth" => 'required',
            "materials" => 'required',
            "in_stock" => 'required',
            "photo" => 'required',
            "short_description" => 'required',
        ]);
        $photo = Storage::disk('public')->put("products", $request->file('photo'));

        $product = Product::create([
            "name" => $request->name,
            "category_id" => $request->category,
            "old_price" => $request->old_price,
            "actual_price" => $request->actual_price,
            "dimentions" => (object)[
               "height" => $request->height,
               "width" => $request->width,
               "depth" => $request->depth
            ],
            "weight" => $request->weight,
            "materials" => explode(',',$request->materials),
            "in_stock" => $request->in_stock,
            "home_slider" => $request->in_slider,
            "photo" => $photo,
            "short_description" => $request->short_description,
            "description" => $request->description,
        ]);
        if($request->file('gallery')){
            $gallery = [];
            foreach($request->file('gallery') as $file){
                $file = Storage::disk('public')->put("products",$file);
                array_push($gallery,$file);
            }
            $product->gallery = $gallery;
            $product->save();
        }
        return redirect('/admin/products');
    }
}
