<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
class NewsletterController extends Controller
{
    public function create(Request $request){
        $request->validate([
            "email" => 'required|unique:newsletters,email'
        ]);

        $newsletter = Newsletter::create([
            "email" => $request->email
        ]);

        return redirect('/?newsletter=success');
    }
}
