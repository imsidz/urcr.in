<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;
use Str;

class ColorController extends Controller
{
    public function adminIndex()
    {
        $colors = Color::latest()->paginate(20);
        return view('admin.color.index', compact('colors'));
    }

    public function adminCreate()
    {
        return view('admin.color.create');
    }

    public function adminStore(Request $request)
    {
        $color = new Color;
        $color->name = $request->name;
        $color->slug = Str::slug($request->name);
        $color->save();

        return redirect('/admin/color')->with('success', 'Color Saved Success');
    }

    public function adminEdit($slug)
    {
        $color = Color::where('slug', $slug)->first();

        return view('admin.color.edit', compact('color'));
    }

    public function adminPut($slug, Request $request)
    {
        $color = Color::where('slug', $slug)->first();
        $color->name = $request->name;
        $color->slug = Str::slug($request->name);
        $color->save();

        return redirect('/admin/color')->with('success', 'Color Updated Success');
    }

    public function adminDelete($slug)
    {
        $color = Color::where('slug', $slug)->first();
        $color->delete();

        return redirect('/admin/color')->with('success', 'Color Deleted Success');
    }
}
