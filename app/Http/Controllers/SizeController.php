<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;
use Str;

class SizeController extends Controller
{
    public function adminIndex()
    {
        $sizes = Size::latest()->paginate(20);
        return view('admin.size.index', compact('sizes'));
    }

    public function adminCreate()
    {
        return view('admin.size.create');
    }

    public function adminStore(Request $request)
    {
        $size = new Size;
        $size->name = $request->name;
        $size->slug = Str::slug($request->name);
        $size->save();

        return redirect('/admin/size')->with('success', 'Size Saved Success');
    }

    public function adminEdit($slug)
    {
        $size = Size::where('slug', $slug)->first();

        return view('admin.size.edit', compact('size'));
    }

    public function adminPut(Request $request, $slug)
    {
        $size = Size::where('slug', $slug)->first();
        $size->name = $request->name;
        $size->slug = Str::slug($request->name);
        $size->save();

        return redirect('/admin/size')->with('success', 'Size Updated Success');
    }

    public function adminDelete($slug)
    {
        $size = Size::where('slug', $slug)->first();
        $size->products()->detach();
        $size->delete();

        return redirect('/admin/size')->with('success', 'Size Deleted Success');
    }
}
