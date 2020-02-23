<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckOutRequest;
use App\Models\Address;
use App\Models\Order;
use App\Models\OrderedProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

        foreach (\Cart::getContent() as $cart) {
            $pro = Product::find($cart->id);
            $product = new OrderedProduct;
            $product->title = $pro->title;
            $product->slug = $pro->slug;
            $product->price = $pro->price;
            $product->mrp = $pro->mrp;
            $product->description = $pro->description;
            $product->seller_id = $pro->seller_id;
            $product->order_id = $order->id;
            $product->size = $cart->attributes->size;
            $product->color = $cart->attributes->color;
            $product->image = $cart->attributes->image;
            $product->save();
        }

        \Cart::clear();
        return redirect('/checkout/' . $order->orderId);
    }

    public function success($orderid)
    {
        $order = Order::where('orderId', $orderid)->first();

        return view('checkout.success', compact('order'));
    }
}
