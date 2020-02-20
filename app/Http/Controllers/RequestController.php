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

    public function approveProductRequest($id, Request $request)
    {
        $product = Product::where('id', $id)->first();
        $product->approve = true;
        $product->save();

        return redirect('/admin/request/product')->with('success', 'Product Approved Success');
    }
}
