<?php

namespace App\Http\Controllers;

use App\Models\ChildCategory;
use App\Models\Color;
use App\Models\Material;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Size;
use App\Models\Style;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    public function index()
    {
        $styles = Style::latest()->get();
        $materials = Material::latest()->get();
        $sizes = Size::latest()->get();
        $colors = Color::latest()->get();
        $products = Product::latest()->store()->paginate(20);
        return view('products.index', compact('products', 'styles', 'materials', 'sizes', 'colors'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstorfail();

        $relateds = Product::whereNotIn('id', [$product->id])->store()->inRandomOrder()->paginate(10);

        return view('products.show', compact('product', 'relateds'));
    }

    public function adminIndex()
    {
        $products = Product::latest()->store()->paginate(20);
        return view('admin.product.index', compact('products'));
    }

    public function adminCreate()
    {
        $categories = ChildCategory::latest()->get();
        $styles = Style::latest()->get();
        $materials = Material::latest()->get();
        $product = new Product;
        $product->save();
        session(['product_id' => $product->id]);
        return view('admin.product.create', compact('categories', 'styles', 'materials'));
    }

    public function adminPost(Request $request)
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
        $product->save();

        $product->childcategories()->attach($request->subcategories);
        $product->materials()->attach($request->materials);
        $request->session()->forget('product_id');
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
        $styles = Style::latest()->get();
        $materials = Material::latest()->get();
        $sizes = Size::latest()->get();
        $colors = Color::latest()->get();
        $products = Product::whereHas('childcategories', function ($query) use ($childcategory) {
            $query->where('slug', $childcategory);
        })->paginate(20);

        return view('products.index', compact('products', 'styles', 'materials', 'colors', 'sizes'));
    }
}
