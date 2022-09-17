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
        $categories = Category::all();
        return view('home', compact('categories'));
    }

    public function categoryPage($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        $product = Product::all();
        return view('products.category', compact('product', 'categories', 'category'));
    }

    public function showAllProducts()
    {
        $categories = Category::all();
        return view('products.products',compact('categories'));
    }

    public function productsList(Request $request, ProductsSearch $productsSearch)
    {
        $categories = Category::all();
        $category = Category::all();
        $products = $productsSearch->search($request);

        return view('products.productsList', compact('products','category', 'categories'));

    }

    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('products.showProduct',['product' => $product]);
    }
}
