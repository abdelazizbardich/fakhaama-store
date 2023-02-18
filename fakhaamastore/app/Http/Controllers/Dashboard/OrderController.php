<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function index(){
        $data = [
            "orders" => Order::all()
        ];
        return view("dashboard.orders",$data);
    }
}
