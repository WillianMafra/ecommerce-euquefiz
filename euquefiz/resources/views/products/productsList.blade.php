@extends('layouts.layout')
@push('style')
    <link rel="stylesheet" href="{{asset('css/products/productslist.css')}}">
@endpush
@push('scripts')
    <script src="{{asset('js/products.js')}}"></script>
@endpush
<main>
    <div class="container">
        <div class="row flex-center mb-6">
            <div class="col-lg-7">
                <h5 class="fw-bold fs-3 fs-lg-5 lh-sm text-center text-lg-start">Procurar por Categoria</h5>
            </div>
            <div class="col-lg-4 text-lg-end text-center"><a class="btn btn-lg text-800 me-2" href="{{route('productsList')}}" role="button">Listar<i class="fas fa-chevron-right ms-2"></i></a></div>
            <div class="col-lg-auto position-relative">
                <button class="carousel-control-prev s-icon-prev carousel-icon" type="button" data-bs-target="#carouselSearchByFood" data-bs-slide="prev"><span class="carousel-control-prev-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                <button class="carousel-control-next s-icon-next carousel-icon" type="button" data-bs-target="#carouselSearchByFood" data-bs-slide="next"><span class="carousel-control-next-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>
            </div>
        </div>
        <div class="row flex-center">
            <div class="col-12">
                <div class="carousel slide" id="carouselSearchByFood" data-bs-touch="false" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            @foreach($category as $categoryName)
                            <div class="row h-100 align-items-center">
                                <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                    <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                        <div class="card-body ps-0">
                                            <h5 class="text-center fw-bold text-1000 text-truncate mb-2">{{$categoryName->category}}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="row h-100 align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

                        <img src="{{asset('storage/img/menu/menu-item-1.png')}}" width="200" alt="{{$product->product_name}}">
                    </div>

                    <div class="product-details">

                        <span class="font-weight-bold d-block">{{$product->price}}</span>
                        <span>{{$product->product_name}}</span>

                        <div class="buttons d-flex flex-row">
                            <div class="cart"><img width="30px" src="{{asset('storage/img/icone/shopping-bag2.png')}}" alt="adicionar-ao-carrinho"></div><button class="btn btn-success cart-button btn-block"><span class="dot">1</span>Add to cart </button>
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
