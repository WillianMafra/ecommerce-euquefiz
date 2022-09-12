<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsStoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AdminController extends Controller

{
    public function admin(){
        return view('admin.admin');
    }
    public function management(){
        return view('admin.management.dashboard');
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
