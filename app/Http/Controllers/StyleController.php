<?php

namespace App\Http\Controllers;

use App\Models\Style;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StyleController extends Controller
{
    public function adminIndex()
    {   
        $styles = Style::latest()->paginate(20);
        return view('admin.style.index', compact('styles'));
    }

    public function adminCreate()
    {
        return view('admin.style.create');
    }

    public function adminStore(Request $request)
    {
        $style = new Style;
        $style->name = $request->name;
        $style->slug = Str::random(5) . '-' . $request->name;
        $style->save();

        return redirect('/admin/style')->with('success', 'Style Added Success');
    }
}
