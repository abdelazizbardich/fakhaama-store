<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Storage;

class CategoryController extends Controller
{
    public function index(){
        $data = [
            "categories" => Category::all()
        ];
        return view("dashboard.categories",$data);
    }

    public function create(){
        return view("dashboard.categories-add");
    }

    public function save(Request $request){
        $request->validate([
            "name" => 'required',
            "photo" => 'required',
        ]);
        $photo = Storage::disk('public')->put("categories", $request->file('photo'));

        $category = Category::create([
            "name" => $request->name,
            "photo" => $photo
        ]);
        return redirect('/admin/categories');
    }
}
