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

        $productsInSession = $request->session()->get('products');

        return view('home', compact('productsInSession'));

    }

    public function categoryPage($id)
    {
        $category = Category::find($id);
        $product = Product::all();
        return view('products.category', compact('product', 'category'));
    }

    public function showAllProducts()
    {

        return view('products.products');
    }

    public function productsList(Request $request, ProductsSearch $productsSearch)
    {

        $products = $productsSearch->search($request);
        return view('products.productsList', compact('products'));

    }

    public function showProduct ($id, Request $request)
    {
        $product = Product::findOrFail($id);

        $message = $request->session()->get('message');
        $request->session()->remove('message');

        return view('products.showProduct', compact('product', 'message'));
    }

}
