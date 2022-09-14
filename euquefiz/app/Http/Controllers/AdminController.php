<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsStoreRequest;
use App\Models\Product;
use App\Service\ProductsSearch;
use App\Service\ProductValidation;
use App\Service\TransationMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller

{
    public function management()
    {
        return view('admin.management.dashboard');
    }

    public function list(Request $request, ProductsSearch $productsSearch)
    {

        $products = $productsSearch->search($request);

        $message = $request->session()->get('message');
        $request->session()->remove('message');
        return view('admin.management.productsList', ['products'=>$products], compact('message'));
    }

    public function createProduct()
    {
        return view('admin.management.addProduct');
    }

    public function storeProduct(ProductsStoreRequest $request, ProductValidation $productValidation, TransationMessage $transationMessage)
    {
        $newProduct = $request->validated();

        $productValidation->validation($newProduct);

        $newProduct['slug'] = Str::slug($newProduct['product_name']);

            Product::create($newProduct);

            $transationMessage->returnAddProductMessage($request, $newProduct);

            return Redirect::route('list');
    }

    public function destroy(Product $product, Request $request, TransationMessage $transationMessage)
    {
        $product->delete();
        Storage::delete($product->image ?? '');

        $transationMessage->returnDestroyProductMessage($request,$product);

        return Redirect::route('list');
    }
}
