<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    public function adminIndex()
    {
        $subs = SubCategory::latest()->paginate(20);
        return view('admin.subcategory.index', compact('subs'));
    }

    public function adminCreate()
    {
        $categories = Category::latest()->get();
        return view('admin.subcategory.create', compact('categories'));
    }

    public function adminPost(Request $request)
    {
        $sub = new SubCategory;
        $sub->name = $request->name;
        $sub->slug = Str::slug($request->name, '-');
        $sub->category_id = $request->category;
        if ($request->file('image')) {
            $image = $request->file('image');
            $name = time() . $image->getClientOriginalName();
            $image->move(public_path() . '/images/', $name);
            $url = url('/images/' . $name);
            $sub->image = $url;
        }
        $sub->save();

        return redirect('/admin/subcategory')->with('status', 'SubCategory Added Success');
    }

    public function adminEdit($slug)
    {
        $sub = SubCategory::where('slug', $slug)->first();
        $categories = Category::latest()->get();
        return view('admin.subcategory.edit', compact('sub', 'categories'));
    }

    public function adminUpdate($slug, Request $request)
    {
        $sub = SubCategory::where('slug', $slug)->first();
        $sub->name = $request->name;
        $sub->slug = Str::slug($request->name, '-');
        $sub->category_id = $request->category;
        if ($request->file('image')) {
            $image = $request->file('image');
            $name = time() . $image->getClientOriginalName();
            $image->move(public_path() . '/images/', $name);
            $url = url('/images/' . $name);
            $sub->image = $url;
        }
        $sub->save();

        return redirect('/admin/subcategory')->with('status', 'SubCategory Updated Success');
    }

    public function adminDelete($slug)
    {
        $sub = SubCategory::where('slug', $slug)->first();
        $sub->delete();

        return back();
    }

    public function getSubCategories(Request $request)
    {
        $subcat = SubCategory::where('category_id', $request->categoryid)->latest()->get();

        return response()->json($subcat);
    }
}
