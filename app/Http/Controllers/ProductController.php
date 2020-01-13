<?php

namespace App\Http\Controllers;

use App\Models\ChildCategory;
use App\Models\Photo;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->store()->paginate(20);
        return view('products.index', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstorfail();
        return view('products.show', compact('product'));
    }

    public function adminIndex()
    {
        $products = Product::latest()->store()->paginate(20);
        return view('admin.product.index', compact('products'));
    }

    public function adminCreate()
    {
        $categories = ChildCategory::latest()->get();
        $product = new Product;
        $product->save();
        return view('admin.product.create', compact('categories'));
    }

    public function adminPost(Request $request)
    {
        $product = Product::latest()->first();
        $product->title = $request->title;
        $product->slug = Str::slug($request->title, '-') . Str::random(5);
        $product->price = $request->price;
        $product->mrp = $request->mrp;
        $product->description = $request->description;
        $product->short = $request->short;
        $product->full = $request->full;
        $product->store = true;
        $product->active = true;
        $product->save();

        $product->childcategories()->attach($request->subcategories);

        return redirect('/admin/products')->with('success', 'Product Added Succes');
    }

    public function adminDelete($slug)
    {
        $product = Product::where('slug', $slug)->firstorfail();

        $product->childcategories()->detach();
        $product->delete();

        return back()->with('status', 'Product Deleted Success');
    }

    public function showChildCategories($categroy, $subcategory, $childcategory)
    {
        $products = Product::whereHas('childcategories', function ($query) use ($childcategory) {
            $query->where('slug', $childcategory);
        })->paginate(20);

        return view('products.index', compact('products'));
    }
}
