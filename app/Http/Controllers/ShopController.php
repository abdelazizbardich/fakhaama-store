<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderItem;

class ShopController extends Controller
{
    public function index(Request $request){
        $products = Product::with("reviews","category");
        if($request->query("price-from") && $request->query("price-from") !== ''){
            $products = $products->where('actual_price','>',$request->query("price-from"));
        }
        if($request->query("price-to") && $request->query("price-to") !== ''){
            $products = $products->where('actual_price','<',$request->query("price-to"));
        }
        if($request->query("category") && $request->query("category") !== ''){
            $products = $products->where('category_id',$request->query("category"));
        }
        if($request->query("search") && $request->query("search") !== ''){
            $products = $products->where('name','LIKE','%'.$request->query("search").'%');
        }
        $data = [
            "products" => $products->orderBy('id','DESC')->paginate(12),
            "categories" => Category::with("products")->orderBy('id','DESC')->get(),
            "price" => [$request->query('price-from'),$request->query('price-to')],
            "category" => $request->query("category"),
            "search" => $request->query("search"),
            'count' => $products->count(),
            'topSale' => OrderItem::select('product_id')->with('product')->groupBy("product_id")->orderBy('product_id','DESC')->limit(3)->get()
        ];
        return view('shop',$data);
    }

    public function getByCategory(Category $category){
        $products = Product::where('category_id',$category->id)->with("reviews")->orderBy('id','DESC')->paginate(12);
        $categories = Category::with("products")->orderBy('id','DESC')->get();
        return view('shop',["products"=>$products,"categories"=>$categories]);
    }
}
