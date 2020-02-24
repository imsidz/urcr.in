<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\ProductRequestByCustomer;
use App\Models\SubChildCategory;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Str;

class CustomerRequestController extends Controller
{
    public function index()
    {
        return view('admin.request.customer.index');
    }

    public function create()
    {
        $materials = Material::latest()->cursor();
        $categories = SubChildCategory::latest()->cursor();
        return view('admin.request.customer.create', compact('materials', 'categories'));
    }

    public function store(Request $request)
    {
        $cus = new ProductRequestByCustomer;
        $name = time() . Str::random(10);
        $image = Image::make($request->image)->save(public_path() . '/images/' . $name . '.png', 60);

        // $image->move(public_path().'/images/', $name);
        $url = url('/images/' . $name . '.png');

        $cus->image = $url;

        $cus->save();

        $cus->materials()->attach($request->materials);
        $cus->subchildcategories()->attach($request->categories);

        return redirect('/admin/request/customer')->with('success', 'New Request Generated Success');
    }
}
