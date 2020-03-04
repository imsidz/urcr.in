<?php

namespace App\Http\Controllers;

use App\Models\ChildCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ChildCategoryController extends Controller
{
    public function adminIndex()
    {
        $childs = ChildCategory::latest()->paginate(20);
        return view('admin.childcategory.index', compact('childs'));
    }

    public function adminCreate()
    {
        $subcategories = SubCategory::latest()->get();
        return view('admin.childcategory.create', compact('subcategories'));
    }

    public function adminPost(Request $request)
    {
        $sub = new ChildCategory;
        $sub->name = $request->name;
        $sub->slug = Str::slug($request->name, '-');
        $sub->sub_category_id = $request->category;
        if ($request->file('image')) {
            $image = $request->file('image');
            $name = time() . $image->getClientOriginalName();
            $image->move(public_path() . '/images/', $name);
            $url = url('/images/' . $name);
            $sub->image = $url;
        }
        $sub->save();

        return redirect('/admin/childcategory')->with('status', 'Added Success');
    }

    public function adminEdit($slug)
    {
        $subcategories = SubCategory::latest()->get();
        $child = ChildCategory::where('slug', $slug)->first();
        return view('admin.childcategory.edit', compact('subcategories', 'child'));
    }

    public function adminPut($slug, Request $request)
    {
        $child = ChildCategory::where('slug', $slug)->first();
        $child->name = $request->name;
        $child->slug = Str::slug($request->name, '-');
        $child->sub_category_id = $request->category;
        if ($request->file('image')) {
            $image = $request->file('image');
            $name = time() . $image->getClientOriginalName();
            $image->move(public_path() . '/images/', $name);
            $url = url('/images/' . $name);
            $child->image = $url;
        }
        $child->save();

        return redirect('/admin/childcategory')->with('status', 'Added Success');
    }

    public function adminDelete($slug)
    {
        $child = ChildCategory::where('slug', $slug)->first();
        $child->delete();

        return back();
    }
}
