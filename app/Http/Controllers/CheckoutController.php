<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckOutRequest;
use App\Models\Address;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('checkout.index');
    }

    public function checout(CheckOutRequest $request)
    {
        $order = new Order;
        $order->orderId = strtoupper(uniqid());
        $order->total = \Cart::getTotal();
        if ($request->payment_method == 'cod') {

            $order->order_status = true;
        }
        $address = Address::where('address', $request->address)->where('user_id', Auth::user()->id)->first();

        if (!$address) {

            $address = new Address;
            $address->address = $request->address;
            $address->name = $request->fname;
            $address->mobile = $request->mobile;
            $address->city = $request->address;
            $address->state = $request->state;
            $address->pincode = $request->pincode;
            $address->country = $request->country;
            $address->user_id = Auth::user()->id;
            $address->active = true;
            $address->save();
        }
        $order->address_id = $address->id;
        $order->save();
        $productId = \Cart::getContent()->pluck('id');
        $order->products()->attach($productId);
        \Cart::clear();
        return redirect('/checkout/' . $order->orderId);
    }

    public function success($orderid)
    {
        $order = Order::where('orderId', $orderid)->first();

        return view('checkout.success', compact('order'));
    }
}
