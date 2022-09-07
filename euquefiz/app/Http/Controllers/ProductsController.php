<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function home(){
        return view('home');
    }

    public function showAllProducts(){
        $products = Product::all();
        return view('products.products', compact('products'));
    }

    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('products.showProduct',['product' => $product]);
    }
}
