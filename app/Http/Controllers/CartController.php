<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
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

        $cart = Cart::add(array(
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

    public function removeProductFromCart($id)
    {
        $remove = Cart::remove($id);
        return back()->with('success', 'Item Removed');
    }

    public function updateCartQty($id, Request $request)
    {
        Cart::update(
            $id,
            ['quantity' => [
                'relative' => false,
                'value' => $request->qty
            ],]
        );

        return back()->with('success', 'Cart Updated');
    }
}
