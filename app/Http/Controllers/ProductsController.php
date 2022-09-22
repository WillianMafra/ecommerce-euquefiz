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

        if (!empty($categories)) {

        return view('home', compact('categories'));

        }
            return view('home');
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

    public function showProduct (Request $request,$id)
    {
        $product = Product::findOrFail($id);
        $request->session()
            ->put(
                'produto',
                "$id"
            );
        return view('products.showProduct', compact('product'));
    }

    public function carShopping(Request $request)
    {
        return view('products.carShopping.carShopping');
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        return view('products.carShopping.carShopping',compact('product'));
    }
}
