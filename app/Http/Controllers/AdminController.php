<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\ProductsStoreRequest;
use App\Models\Category;
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
    public function teste()
    {
        return view('admin.management.teste');
    }

    public function list(Request $request, ProductsSearch $productsSearch)
    {
        $products = $productsSearch->search($request);

        $categories = Category::all();

        $message = $request->session()->get('message');
        $request->session()->remove('message');
        return view('admin.management.productsList', compact('message', 'products','categories'));
    }

    public function createProduct()
    {
        $categories = Category::all();
        return view('admin.management.addProduct', compact('categories'));
    }

    public function storeProduct(ProductsStoreRequest $request, ProductValidation $productValidation, TransationMessage $transationMessage)
    {
        $newProduct = $request->validated();
        $productValidation->validation($newProduct);
        $newProduct['slug'] = Str::slug($newProduct['product_name']);
        $newProduct['category_id'] = $request->category;
        Product::create($newProduct);

        $transationMessage->returnAddProductMessage($request, $newProduct);

        return Redirect::route('list');
    }

    public function editProduct(Product $product)
    {
        return view('admin.management.productEdit', ['product' => $product]);
    }

    public function updateProduct(Product $product, ProductsStoreRequest $productsStoreRequest, ProductValidation $productValidation)
    {
        $newProduct = $productsStoreRequest->validated();
        $productValidation->validation($newProduct);
        $newProduct['slug'] = Str::slug($newProduct['product_name']);

        $product->fill($newProduct);
        $product->saveOrFail();

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
