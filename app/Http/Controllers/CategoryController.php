<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function adminIndex()
    {
        $categories = Category::latest()->paginate(20);
        return view('admin.category.index', compact('categories'));
    }

    public function adminCreate()
    {
        return view('admin.category.create');
    }

    public function adminPost(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->save();

        return redirect('/admin/category')->with('status', 'Category Added Success');
    }

    public function adminDelete($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->delete();

        return back()->with('status', 'Deleted Successs');
    }

    public function adminPut($slug, Request $request)
    {
        $category = Category::where('slug', $slug)->first();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name, '-');
        $category->save();

        return redirect('/admin/category')->with('status', 'Category Added Success');
    }

    public function adminEdit($slug)
    {
        $category = Category::where('slug', $slug)->first();

        return view('admin.category.edit', compact('category'));
    }

    public function getCategories()
    {
        $categories = Category::latest()->get();

        return response()->json($categories);
    }
}
