<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsStoreRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AdminController extends Controller

{
    public function management(){
        return view('admin.management.dashboard');
    }
    public function list(){

        $products = Product::query()->orderBy('product_name')->paginate(10);

        return view('admin.management.productsList', compact('products'));
    }
    public function createProduct()
    {
        return view('admin.management.addProduct');
    }
    public function storeProduct(ProductsStoreRequest $request)
    {
        $newProduct = $request->validated();
        $newProduct['slug'] = Str::slug($newProduct['product_name']);

            if (!empty($newProduct['image']) && $newProduct['image']->isValid()) {
                $image = $newProduct['image'];
                $imagepath = $image->store('product');
                $newProduct['image'] = $imagepath;
            }

            Product::create($newProduct);

            Session::flash('message', 'MENSAGEM TESTE');
            return Redirect::route('list');
    }

    public function teste()
    {
        return view('admin.products.teste');
    }
}
