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
            "short_description" => 'required'
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
            "other_infos" => $request->other_infos
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
        if($request->file('slider_photo')){
            $product->slider_photo = Storage::disk('public')->put("products",$request->file('slider_photo'));;
            $product->save();
        }
        return redirect('/admin/products');
    }

    public function edit(Product $product){
        $data = [
            "product" => $product,
            "categories" => Category::all()
        ];
        return view("dashboard.products-edit",$data);
    }

    public function update(Request $request, Product $product){
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
            "short_description" => 'required'
        ]);
        if($product->name){
            $product->name = $request->name;
        }
        if($product->category_id){
            $product->category_id = $request->category;
        }
        if($product->old_price){
            $product->old_price = $request->old_price;
        }
        if($product->actual_price){
            $product->actual_price = $request->actual_price;
        }
        if($product->dimentions){
            $product->dimentions = (object)[ "height" => $request->height, "width" => $request->width, "depth" => $request->depth];
        }
        if($product->weight){
            $product->weight = $request->weight;
        }
        if($product->materials){
            $product->materials = explode(',',$request->materials);
        }
        if($product->in_stock){
            $product->in_stock = $request->in_stock;
        }
        if($product->home_slider){
            $product->home_slider = $request->home_slider;
        }
        if($product->short_description){
            $product->short_description = $request->short_description;
        }
        if($product->description){
            $product->description = $request->description;
        }
        if($product->other_infos){
            $product->other_infos = $request->other_infos;
        }
        if($request->file("photo")){
            if($product->photo){
                Storage::disk('public')->delete($product->photo);
            }
            $product->photo = Storage::disk('public')->put("products", $request->file('photo'));
        }
        if($request->file('gallery')){
            if($product->gallery){
                foreach($product->gallery as $old_gellery){
                    Storage::disk('public')->delete($old_gellery);
                }
            }
            $gallery = [];
            foreach($request->file('gallery') as $file){
                $file = Storage::disk('public')->put("products/gallery",$file);
                array_push($gallery,$file);
            }
            $product->gallery = $gallery;
        }
        if($request->file('slider_photo')){
            if($product->slider_photo){
                Storage::disk('public')->delete($product->slider_photo);
            }
            $product->slider_photo = Storage::disk('public')->put("products/slider",$request->file('slider_photo'));;
        }
        $product->save();
        return redirect('/admin/products/edit/'.$product->id);
    }
}
