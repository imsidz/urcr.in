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
}
