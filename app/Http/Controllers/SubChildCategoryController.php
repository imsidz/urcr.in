<?php

namespace App\Http\Controllers;

use App\Models\ChildCategory;
use App\SubChildCategory;
use Illuminate\Http\Request;
use Str;

class SubChildCategoryController extends Controller
{
    public function adminIndex()
    {
        $subchilds = SubChildCategory::latest()->paginate(20);
        return view('admin.subchildcategory.index', compact('subchilds'));
    }

    public function adminCreate()
    {
        $childcategories = ChildCategory::latest()->get();
        return view('admin.subchildcategory.create', compact('childcategories'));
    }

    public function adminPost(Request $request)
    {
        $sub = new SubChildCategory;
        $sub->name = $request->name;
        $sub->slug = Str::slug($request->name, '-');
        $sub->child_category_id = $request->category;
        if ($request->file('image')) {
            $image = $request->file('image');
            $name = time() . $image->getClientOriginalName();
            $image->move(public_path() . '/images/', $name);
            $url = url('/images/' . $name);
            $sub->image = $url;
        }
        $sub->save();

        return redirect('/admin/subchildcategory')->with('status', 'Added Success');
    }

    public function adminDelete($slug)
    {
        $child = SubChildCategory::where('slug', $slug)->first();
        $child->delete();

        return back();
    }
}
