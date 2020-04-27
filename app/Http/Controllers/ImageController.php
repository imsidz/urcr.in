<?php

namespace App\Http\Controllers;

use App\Models\ChildCategory;
use App\Models\Photo;
use App\Models\Product;
use App\Models\SubChildCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::find(session('product_id'));
        $photo = new Photo;
        $name = time() . Str::random(10);
        $image = Image::make($request->file)->save(public_path() . '/images/' . $name . '.png', 60);

        // $image->move(public_path().'/images/', $name);
        $url = url('/images/' . $name . '.png');

        $photo->link = $url;

        $photo->product_id = $product->id;
        $photo->save();

        return response()->json('success');
    }

    public function adminDelete($id)
    {
        $image = Photo::find($id);
        $image->delete();

        return back()->with('success', 'Image Delete Success');
    }

    public function imageUpload(Request $request)
    {
        $child = ChildCategory::find($request->child);

        $name = time() . Str::random(10);
        $image = Image::make($request->file)->save(public_path() . '/images/' . $name . '.png', 60);

        $url = url('/images/' . $name . '.png');
        $child->image = $url;
        $child->save();

        return response()->json($url);
    }

    public function imageSubChildCategoryUpload(Request $request)
    {
        $child = SubChildCategory::find($request->subchild);

        $name = time() . Str::random(10);
        $image = Image::make($request->file)->save(public_path() . '/images/' . $name . '.png', 60);

        $url = url('/images/' . $name . '.png');
        $child->image = $url;
        $child->save();

        return response()->json($url);
    }
}
