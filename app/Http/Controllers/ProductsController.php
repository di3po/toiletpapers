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
        return view('products.showAllProducts')->with('data', $data);
    }

    public function showOneProduct($id) {
        $product = Product::find($id);
        return view('products.showOneProduct', [
           // here 'products' is db table name
            'products' => $product
        ]);
    }
}
