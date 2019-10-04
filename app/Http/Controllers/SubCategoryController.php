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
        if($request->file('image'))
        {
            $image = $request->file('image');
            $name = time().$image->getClientOriginalName();
            $image->move(public_path().'/images/', $name);
            $url = url('/images/' . $name);
            $sub->image = $url;
        }
        $sub->save();

        return redirect('/admin/subcategory')->with('status', 'SubCategory Added Success');
    }
}
