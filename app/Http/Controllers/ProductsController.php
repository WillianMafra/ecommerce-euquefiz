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

        $categories = Category::all();
        $products = $productsSearch->search($request);
        return view('products.productsList', compact('products', 'categories'));

    }

    public function showProduct ($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);


        return view('products.showProduct', compact('product','categories'));
    }

    public function carShopping(Request $request)
    {
        $total = 0;
        $productsInCart = [];
        $productsInSession = $request->session()->get("products");
        if ($productsInSession) {
            $productsInCart = Product::findMany(array_keys($productsInSession));
            $total = Product::sumPricesByQuantities($productsInCart, $productsInSession);
        }
        $quantidade = $request->session()->all();
        $viewData["total"] = $total;
        $viewData["products"] = $productsInCart;

        return view('products.carShopping.carShopping', compact('quantidade'))->with("viewData", $viewData);
    }

    public function addToCart(Request $request, $id)
    {
        $products = $request->session()->get("products");
        $products[$id] = $request->input('quantity');
        $request->session()->put('products', $products);


        return redirect()->back();
    }
}
