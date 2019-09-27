<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    public function addToCart($slug)
    {
        $product = Product::where('slug', $slug)->firstorfail();

        $cart = \Cart::add(array(
                    'id' => $product->id,
                    'name' => $product->title,
                    'price' => $product->price,
                    'quantity' => 1,
                    'attributes' => array(
                        'image' => $product->photos->first()['link']
                    )
                ));

        return back()->with('success', 'Product Added to Cart');
    }
}
