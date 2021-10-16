<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\CartRequest;
use App\Models\SessionModel;

class ProductsController extends Controller
{
    public function show()
    {
        $data = Product::all();
        return view('products.showAllProducts')->with('data', $data);
    }

    public function showOneProduct($id)
    {
        $product = Product::find($id);
        return view('products.showOneProduct', [
            // here 'products' is db table name
            'products' => $product
        ]);
    }

    public function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart();
            $cart->user_id = $req->user()->id;
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect()->back()->with('success', 'Added!');
        } else {
            return redirect('/login');
        }
    }

    static function cartItemAmount()
    {
        $user_id = auth()->user()->id;
        $total = Cart::where('user_id', $user_id)->count();
        return view('layouts.master', ['total' => $total]);
    }
}
