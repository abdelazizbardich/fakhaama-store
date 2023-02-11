<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\Address;
use App\Models\OrderItem;
use Str;
class OrderController extends Controller
{

    public function checkout(Product $product,Request $request){
        $quantity = $request->query('quantity');
        $data = [
            "order" => (object)[
                "product" => $product,
                "quantity" => intval($quantity)
            ]
        ];
        return view('product-checkout',$data);
    }

    public function confirm(Request $request){
        $request->validate([
            "product_id" => "required",
            "quantity" => "required",
            "first_name" => "required",
            "last_name" => "required",
            "country" => "required",
            "address" => "required",
            "city" => "required",
            "region" => "required",
            "postal_code" => "required",
            "phone" => "required",
            "email" => "required",
            "privacy" => "required|in:on"
        ]);
        $user = User::where('username',Str::lower(str_replace(" ","",$request->first_name.$request->last_name)));
        if($user->count() == 0){
            $user = User::create([
                "username" => Str::lower(str_replace(" ","",$request->first_name.$request->last_name)),
                "first_name" => $request->first_name,
                "last_name" => $request->last_name,
                "email" => $request->email,
                "phone" => $request->phone
            ]);
        }else{
            $user = $user->first();
        }
        $address = Address::
        where("country", $request->country)
        ->where("address", $request->address)
        ->where("city", $request->city)
        ->where("region", $request->region)
        ->where("postal_code", $request->postal_code);
        if($address->count() == 0){
            $address = Address::create([
                "country" => $request->country,
                "address" => $request->address,
                "city" => $request->city,
                "region" => $request->region,
                "postal_code" => $request->postal_code,
            ]);
        }else{
            $address = $address->first();
        }

        $order = Order::create([
            "code" => time(),
            "address_id" => $address->id,
            "user_id" => $user->id
        ]);

        $orderItem = null;
        if($order->id){
            $orderItem = OrderItem::create([
                "quantity" => $request->quantity,
                "order_id" => $order->id,
                "product_id" => $request->product_id
            ]);
        }

        $data = [
            "order" => $order,
            "quantity" => $request->quantity,
            "product" => Product::find($request->product_id),
            "address" => $address,
            "user" => $user
        ];
        return view('order-confirmed',$data);
    }
}
