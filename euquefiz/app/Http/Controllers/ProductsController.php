<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Service\ProductsSearch;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function showAllProducts()
    {
        return view('products.products');
    }

    public function productsList(Request $request, ProductsSearch $productsSearch)
    {
        $category = Category::all();
        $products = $productsSearch->search($request);

        return view('products.productsList', compact('category', 'products'));

    }

    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('products.showProduct',['product' => $product]);
    }
}
