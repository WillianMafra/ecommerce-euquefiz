<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Service\ProductsSearch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function teste()
    {

        return view('products.carShopping.teste');
    }

    public function productsList(Request $request, ProductsSearch $productsSearch)
    {

        $products = $productsSearch->search($request);
        return view('products.productsList', compact('products'));

    }

    public function showProduct ($id)
    {
        $product = Product::findOrFail($id);


        return view('products.showProduct', compact('product'));
    }

    public function carShopping(Request $request)
    {

        dd(Session::all());
        return view('products.carShopping.carShopping', compact('products'));
    }

    public function addToCart(Request $request, $id)
    {
        $productId = Product::findOrFail($id);

        $productsInCart = ['product' => $productId, 'quantity' => $request->input('quantity')];

        Session::push('products', $productsInCart);

        return view('home');
    }
}
