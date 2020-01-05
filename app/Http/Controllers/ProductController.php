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
        $products = Product::latest()->paginate(2);
        return view('products.index', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstorfail();
        return view('products.show', compact('product'));
    }

    public function adminIndex()
    {
        $products = Product::latest()->paginate(20);
        return view('admin.product.index', compact('products'));
    }

    public function adminCreate()
    {
        $subcategories = ChildCategory::latest()->get();
        return view('admin.product.create', compact('subcategories'));
    }

    public function adminPost(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->slug = Str::slug($request->title, '-') . Str::random(5);
        $product->price = $request->price;
        $product->mrp = $request->mrp;
        $product->description = $request->description;
        $product->short = $request->short;
        $product->full = $request->full;
        $product->save();

        $product->childcategories()->attach($request->subcategories);

        foreach ($request->image as $image) {
            $photo = new Photo;
            $name = time() . Str::random(10);
            $image = Image::make($image)->save(public_path() . '/images/' . $name, 60);

            // $image->move(public_path().'/images/', $name);
            $url = url('/images/' . $name);

            $photo->link = $url;

            $photo->product_id = $product->id;
            $photo->save();
        }

        return redirect('/admin/products')->with('success', 'Product Added Succes');
    }

    public function adminDelete($slug)
    {
        $product = Product::where('slug', $slug)->firstorfail();

        $product->categories()->detach();
        $product->delete();

        return back()->with('status', 'Product Deleted Success');
    }
}
