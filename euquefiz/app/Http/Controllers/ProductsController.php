<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function home(){
        return view('home');
    }

    public function showAllProducts(){
        return view('products.products');
    }

    public function productsList(Request $request){

        $products = Product::query();
        $products->when($request->search, function ($query, $campoDePesquisa){
        $query->where('product_name', 'like', '%' . $campoDePesquisa . '%');
        });

        $products = $products->paginate(5);

        return view('products.productsList', ['products'=>$products]);
    }

    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('products.showProduct',['product' => $product]);
    }
}
