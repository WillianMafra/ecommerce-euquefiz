<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Service\ProductsSearch;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function home(Request $request)
    {
        $categories = Category::all();
        $productsInSession = $request->session()->get('products');

        if (!empty($categories)) {

        return view('home', compact('categories', 'productsInSession'));

        }
            return view('home',compact('productsInSession'));
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

        return view('products.products');
    }

    public function productsList(Request $request, ProductsSearch $productsSearch)
    {

        $categories = Category::all();
        $products = $productsSearch->search($request);
        return view('products.productsList', compact('products', 'categories'));

    }

    public function showProduct ($id, Request $request)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);

        $message = $request->session()->get('message');
        $request->session()->remove('message');

        return view('products.showProduct', compact('product','categories', 'message'));
    }

}
