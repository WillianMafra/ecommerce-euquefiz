<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsStoreRequest;
use App\Models\Product;
use App\Service\ProductsSearch;
use App\Service\ImageValidation;
use App\Service\TransationMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminProductsController extends Controller
{

    public function list(Request $request, ProductsSearch $productsSearch)
    {
        $products = $productsSearch->search($request);

        $message = $request->session()->get('message');
        $request->session()->remove('message');
        return view('admin.products.productsList', compact('message', 'products'));
    }

    public function createProduct()
    {
        return view('admin.products.addProduct');
    }

    public function storeProduct(
        ProductsStoreRequest $request,
        ImageValidation      $productValidation,
        TransationMessage    $transationMessage)
    {
        $newProduct['category_id'] = $request->get('category');
        $newProduct = $request->validated();
        $productValidation->validation($newProduct);
        $newProduct['slug'] = Str::slug($newProduct['product_name']);
        Product::create($newProduct);

        $transationMessage->returnAddProductMessage($request, $newProduct);

        return Redirect::route('list');
    }

    public function editProduct(Product $product)
    {
        return view('admin.products.productEdit', ['product' => $product]);
    }

    public function updateProduct(
        Product              $product,
        ProductsStoreRequest $productsStoreRequest,
        ImageValidation      $productValidation)
    {

        $newProduct = $productsStoreRequest->validated();
        $productValidation->validation($newProduct);
        $newProduct['slug'] = Str::slug($newProduct['product_name']);

        $product->fill($newProduct);
        $product->saveOrFail();

        return Redirect::route('list');
    }

    public function destroy(
        Product $product,
        Request $request,
        TransationMessage $transationMessage)
    {

        $product->delete();
        Storage::delete($product->image ?? '');

        $transationMessage->returnDestroyProductMessage($request,$product);

        return Redirect::route('list');
    }
}
