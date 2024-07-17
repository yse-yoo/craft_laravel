<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $data['products'] = Product::get();
        return view('product.index', $data);
    }

    public function show(Request $request, int $id)
    {
        $data['product'] = Product::find($id);
        // dd($data);
        return view('product.show', $data);
    }
}
