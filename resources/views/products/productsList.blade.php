@extends('layouts.layout')
@push('style')
    <link rel="stylesheet" href="{{asset('css/products/productslist.css')}}">
@endpush
@push('scripts')
    <script src="{{asset('js/products.js')}}"></script>
@endpush
<main>
<section class="wrapper">

    <div class="container">
        <div class="col-lg-7">
            <h5 class="fw-bold fs-3 fs-lg-5 lh-sm text-center text-lg-start">Confira Nossos Pratos</h5>
            <form method="GET" action="{{route('productsList')}}" autocomplete="off">
                <section class="flex justify-center">
                    <label for="search" class="leading-7 text-sm text-gray-600 ml-2"></label>
                    <input type="text" id="search" name="search" class="placeholder:text-center w-2/4 mx-2.5 bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:ring-2 focus:bg-transparent focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Pesquisar Produto">
                    <button type="submit" class="inline-flex rounded border border-gray-300  py-2 px-6 focus:outline-none rounded">Pesquisar</button>
                </section>
            </form>
        </div>
        <div class="row g-1">
            @foreach($products as $product)
            <div class="col-md-3">

                <div class="card p-3">

                    <div class="text-center">

                        <img src="{{asset($product->image)}}" width="200" alt="{{$product->product_name}}">
                    </div>

                    <div class="product-details">

                        <span class="font-weight-bold d-block">{{$product->price}}</span>
                        <span>{{$product->product_name}}</span>

                        <div class="buttons d-flex flex-row">
                            <div class="cart"><img width="30px" src="{{asset('img/icone/shopping-bag2.png')}}" alt="adicionar-ao-carrinho"></div><button class="btn btn-success cart-button btn-block"><span class="dot">1</span>Add to cart </button>
                        </div>

                        <div class="weight">

                            <small>{{$product->stock}} Unidades</small>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
</main>
{{ $products->links() }}
