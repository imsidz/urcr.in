<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MaterialController extends Controller
{
    public function adminIndex()
    {   
        $materials = Material::latest()->paginate(20);
        return view('admin.material.index', compact('materials'));
    }

    public function adminCreate()
    {
        return view('admin.material.create');
    }

    public function adminStore(Request $request)
    {
        $material = new Material;
        $material->name = $request->name;
        $material->slug = Str::random(5) . '-' . $request->name;
        $material->save();
        return redirect('/admin/material')->with('success', 'Material Added Success');
    }

    public function adminEdit($slug)
    {
        $material = Material::where('slug', $slug)->first();
        return view('admin.material.edit', compact('material'));
    }

    public function adminUpdate(Request $request, $slug)
    {
        $material = Material::where('slug', $slug)->first();
        $material->name = $request->name;
        $material->slug = Str::random(5) . '-' . $request->name;
        $material->save();
        return redirect('/admin/material')->with('success', 'Material Updated Success');
    }

    public function adminDelete($slug)
    {
        $material = Material::where('slug', $slug)->first();
        $material->delete();

        return redirect('/admin/material')->with('success', 'Material Delete Success');
    }
}
