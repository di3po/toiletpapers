<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show() {
        $data = Product::all();
        /* return view('products', [
            'data' => $data
        ]); */
        /* return view('products', compact('data')); */
        return view('products')->with('data', $data);
    }
}
