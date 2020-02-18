<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Product;
use App\Models\Style;
use App\Models\SubChildCategory;
use Auth;
use Illuminate\Http\Request;
use Str;

class RequestController extends Controller
{
    public function getProductRequests()
    {
        $products = Product::disapprove()->paginate(25);
        return view('admin.request.product', compact('products'));
    }

    public function showProductRequest($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $categories = SubChildCategory::latest()->get();
        $styles = Style::latest()->get();
        $materials = Material::latest()->get();
        session(['product_id' => $product->id]);
        return view('admin.request.show', compact('categories', 'styles', 'materials', 'product'));
    }

    public function approveProductRequest($slug, Request $request)
    {
        $product = Product::find(session('product_id'));
        $product->title = $request->title;
        $product->slug = Str::slug($request->title, '-') . Str::random(5);
        $product->price = $request->price;
        $product->mrp = $request->mrp;
        $product->description = $request->description;
        $product->store = true;
        $product->active = true;
        $product->style_id = $request->style;
        $product->seller_id = Auth::user()->id;
        $product->approve = true;
        $product->save();

        $product->subchildcategories()->sync($request->categories);
        $product->materials()->sync($request->materials);
        $request->session()->forget('product_id');

        $product->save();

        return redirect('/admin/request/product')->with('success', 'Product Approved Success');
    }
}
