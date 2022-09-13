<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductsStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminController extends Controller

{
    public function management(){
        return view('admin.management.dashboard');
    }
    public function list(Request $request){

        $products = Product::query()->orderBy('product_name')->paginate(10);
        $message = $request->session()->get('message');
        $request->session()->remove('message');
        return view('admin.management.productsList', compact('products', 'message'));
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

            $request->session()
                ->flash(
                    'message',
                    "Produto {$newProduct['product_name']} Inserido no Banco de Dados"
                );

            return Redirect::route('list');
    }

    public function destroy(Product $product, Request $request)
    {
        $product->delete();
        Storage::delete($product->image ?? '');

        $request->session()
            ->flash(
                'message',
                "Produto {$product['product_name']} Removido do Banco de Dados"
            );
        return Redirect::route('list');
    }
}
