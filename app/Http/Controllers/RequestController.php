<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function getProductRequests()
    {
        $products = Product::disapprove()->get();
        return view('admin.request.product');
    }
}
