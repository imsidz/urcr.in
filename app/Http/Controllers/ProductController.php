<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Color;
use App\Models\Material;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Size;
use App\Models\Style;
use App\Models\SubCategory;
use App\Models\SubChildCategory;
use Auth;
use GuzzleHttp\Cookie\CookieJar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::latest()->filter($request)->approved()->store()->paginate(60);

        $productWithoutFilter = Product::latest()->approved()->store()->paginate(60);

        $pluckProducts = $productWithoutFilter->pluck('slug')->toArray();

        $styles = Style::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $materials = Material::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $sizes = Size::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $colors = Color::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();
        return view('products.index', compact('products', 'styles', 'materials', 'sizes', 'colors'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->approved()->firstorfail();

        $relateds = Product::whereNotIn('id', [$product->id])->store()->inRandomOrder()->paginate(10);

        return view('products.show', compact('product', 'relateds'));
    }

    public function adminIndex()
    {
        $products = Product::latest()->store()->paginate(20);
        return view('admin.product.index', compact('products'));
    }

    public function adminCreate(Request $request)
    {
        $categories = ChildCategory::latest()->get();
        $styles = Style::latest()->get();
        $materials = Material::latest()->get();
        $sizes = Size::latest()->get();
        $colors = Color::latest()->get();
        $product = new Product;
        $product->save();
        $request->session()->put('product_id', $product->id);
        return view('admin.product.create', compact('categories', 'styles', 'materials', 'sizes', 'colors'));
    }

    public function adminPost(Request $request)
    {

        $product = Product::find(session('product_id'));
        $product->title = $request->title;
        $product->slug = Str::slug($request->title, '-') . '-' . Str::random(5);
        $product->price = $request->price;
        $product->mrp = $request->mrp;
        $product->description = $request->description;
        $product->store = true;
        $product->active = true;
        $product->style_id = $request->style;
        $product->seller_id = Auth::user()->id;
        $product->save();

        $product->subchildcategories()->sync($request->categories);
        $product->colors()->sync($request->colors);
        $product->sizes()->sync($request->sizes);
        $product->materials()->sync($request->materials);
        $request->session()->forget('product_id');
        return redirect('/admin/products')->with('success', 'Product Added Succes');
    }

    public function adminEdit($slug, Request $request)
    {
        $categories = SubChildCategory::latest()->get();
        $styles = Style::latest()->get();
        $materials = Material::latest()->get();
        $colors = Color::latest()->get();
        $sizes = Size::latest()->get();
        $product = Product::where('slug', $slug)->first();
        $request->session()->put('product_id', $product->id);
        return view('admin.product.edit', compact('categories', 'styles', 'materials', 'product', 'colors', 'sizes'));
    }

    public function adminPut($slug, Request $request)
    {
        $product = Product::find(session('product_id'));
        $product->title = $request->title;
        // $product->slug = Str::slug($request->title, '-') . '-' . Str::random(5);
        $product->price = $request->price;
        $product->mrp = $request->mrp;
        $product->description = $request->description;
        $product->store = true;
        $product->active = true;
        $product->style_id = $request->style;
        $product->seller_id = Auth::user()->id;
        $product->save();

        $product->subchildcategories()->sync($request->categories);
        $product->colors()->sync($request->colors);
        $product->sizes()->sync($request->sizes);
        $product->materials()->sync($request->materials);
        $request->session()->forget('product_id');

        return redirect('/admin/products')->with('success', 'Product Updated Succes');
    }

    public function adminDelete($slug)
    {
        $product = Product::where('slug', $slug)->firstorfail();

        $product->childcategories()->detach();
        $product->delete();

        return back()->with('status', 'Product Deleted Success');
    }

    public function showChildCategories($categroy, $subcategory, $childcategory, Request $request)
    {
        $childcat = ChildCategory::where('slug', $childcategory)->first();
        $subchilds = $childcat->subchildcategories->pluck('slug')->toArray();
        $products = Product::whereHas('subchildcategories', function ($query) use ($subchilds) {
            $query->whereIn('slug', $subchilds);
        })->filter($request)->approved()->paginate(24);

        $productWithoutFilter = Product::whereHas('subchildcategories', function ($query) use ($subchilds) {
            $query->whereIn('slug', $subchilds);
        })->approved()->paginate(24);

        $pluckProducts = $productWithoutFilter->pluck('slug')->toArray();

        $styles = Style::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $materials = Material::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $sizes = Size::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $colors = Color::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        return view('products.index', compact('products', 'styles', 'materials', 'colors', 'sizes'));
    }

    public function showSubChildCategories($category, $subcategory, $childcategory, $subchild, Request $request)
    {
        $products = Product::whereHas('subchildcategories', function ($query) use ($subchild) {
            $query->where('slug', $subchild);
        })->filter($request)->approved()->paginate(24);

        $productWithoutFilter = Product::whereHas('subchildcategories', function ($query) use ($subchild) {
            $query->where('slug', $subchild);
        })->approved()->paginate(24);

        $pluckProducts = $productWithoutFilter->pluck('slug')->toArray();

        $styles = Style::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $materials = Material::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $sizes = Size::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $colors = Color::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        return view('products.index', compact('products', 'styles', 'materials', 'colors', 'sizes'));
    }

    public function showCategories($category, Request $request)
    {

        $category = Category::where('slug', $category)->firstorfail();
        $subcategories = SubCategory::where('category_id', $category->id)->get();
        $childcategories = ChildCategory::whereIn('sub_category_id', $subcategories->pluck('id'))->get();
        $subchildcategories = SubChildCategory::whereIn('child_category_id', $childcategories->pluck('id'))->get();

        $products = Product::whereHas('subchildcategories', function ($query) use ($subchildcategories) {
            $query->whereIn('sub_child_category_id', $subchildcategories->pluck('id'));
        })->filter($request)->approved()->paginate(20);

        $productWithoutFilter = Product::whereHas('subchildcategories', function ($query) use ($subchildcategories) {
            $query->whereIn('sub_child_category_id', $subchildcategories->pluck('id'));
        })->approved()->paginate(20);

        $pluckProducts = $productWithoutFilter->pluck('slug')->toArray();

        $styles = Style::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $materials = Material::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $sizes = Size::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $colors = Color::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        return view('products.index', compact('products', 'styles', 'materials', 'colors', 'sizes'));
    }

    public function showSubCategories($category, $subcategory, Request $request)
    {
        $category = Category::where('slug', $category)->firstorfail();
        $subcategory = SubCategory::where('slug', $subcategory)->first();
        $childcategories = ChildCategory::where('sub_category_id', $subcategory->id)->get();
        $subchildcategories = SubChildCategory::whereIn('child_category_id', $childcategories->pluck('id'))->get();

        $products = Product::whereHas('subchildcategories', function ($query) use ($subchildcategories) {
            $query->whereIn('sub_child_category_id', $subchildcategories->pluck('id'));
        })->filter($request)->approved()->paginate(20);

        $productWithoutFilter = Product::whereHas('subchildcategories', function ($query) use ($subchildcategories) {
            $query->whereIn('sub_child_category_id', $subchildcategories->pluck('id'));
        })->approved()->paginate(20);

        $pluckProducts = $productWithoutFilter->pluck('slug')->toArray();

        $styles = Style::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $materials = Material::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $sizes = Size::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        $colors = Color::whereHas('products', function ($query) use ($pluckProducts) {
            $query->whereIn('slug', $pluckProducts);
        })->get();

        return view('products.index', compact('products', 'styles', 'materials', 'colors', 'sizes'));
    }
}
