<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{


    public function save(Request $request){
        $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required",
            "message" => "required"
        ]);


        $contact = Contact::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "message" => $request->message
        ]);

        return Redirect::to('contact');
    }
}
