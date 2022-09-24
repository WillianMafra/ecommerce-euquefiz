<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Category;
use App\Models\Product;
use App\Service\ProductsSearch;
use App\Service\QuantityValidation;
use App\Service\TransationMessage;
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

    public function showProduct ($id, Request $request)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);

        $message = $request->session()->get('message');
        $request->session()->remove('message');

        return view('products.showProduct', compact('product','categories', 'message'));
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
        $quantidade = $productsInSession;
        $viewData["total"] = $total;
        $viewData["products"] = $productsInCart;

        return view('products.carShopping.carShopping', compact('quantidade'))->with("viewData", $viewData);
    }

    public function addToCart(CartRequest $request, $id, QuantityValidation $quantityValidation, TransationMessage $transationMessage)
    {

        //A lógica aplicada foi a seguinte, eu faço a validação da request da inserção do produto no carrinho, depois usando um metodo de uma classe verifico se a quantidade escolhida pelo cliente não é maior do que o que temos em estoque, e baseado nessa mensagem, usando outro metodo, eu retorno uma mensagem de sucesso ou falha, caso a operacao se suceda, o processo continua normalmente, caso fracasse, o cliente é redirecionado de volta.
        $request->validated();
        $sucessOrFail = $quantityValidation->quantityValidator($request->quantity,$id);

        $transationMessage->productInsertedCart($request, $sucessOrFail);

        if ($sucessOrFail) {
        $products = $request->session()->get("products");
        $products[$id] = $request->input('quantity');
        $request->session()->put('products', $products);

        return redirect()->back();

        }
            return redirect()->back();
    }
}
