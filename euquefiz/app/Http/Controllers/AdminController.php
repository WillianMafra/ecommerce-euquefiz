<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsStoreRequest;
use App\Models\Product;

class AdminController extends Controller

{
    public function management(){
        return view('admin.management.dashboard');
    }
    public function listar(){
        $products = Product::all();
        return view('admin.management.productsList', ['products' => $products]);
    }
    public function createProduct()
    {
        return view('admin.management.addProduct');
    }
    public function storeProduct(ProductsStoreRequest $request)
    {
      dd($request);
    }
    public function teste()
    {
        return view('admin.products.teste');
    }
}
