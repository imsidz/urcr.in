<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function adminIndex()
    {
        $orders = Order::latest()->paginate(20);
        return view('admin.orders.index', compact('orders'));
    }

    public function getOrderHistory()
    {
        $orders = Order::where('user_id', Auth::user()->id)->paginate(20);

        return view('orders.index', compact('orders'));
    }
}
