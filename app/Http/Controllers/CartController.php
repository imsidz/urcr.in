<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        // {   $carts = \Cart::get();
        return view('cart.index');
    }

    public function addToCart($slug, Request $request)
    {
        $product = Product::where('slug', $slug)->firstorfail();

        $cart = \Cart::add(array(
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->price,
            'quantity' => $request->qty,
            'attributes' => array(
                'image' => $product->photos->first()['link'],
                'size' => $request->size,
                'color' => $request->color
            )
        ));

        return back()->with('success', 'Product Added to Cart');
    }
}
