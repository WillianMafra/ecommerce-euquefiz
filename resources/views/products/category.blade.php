@extends('layouts.layout')
@push('style')
    <link rel="stylesheet" href="{{asset('css/products/productslist.css')}}">
@endpush
@push('scripts')
    <script src="{{asset('js/products.js')}}"></script>
@endpush
<section class="container my-3">
<div class="container-fluid bg-3 text-center h-75">
    <h3>Você Está Na Categoria {{$category->name}}</h3><br>
    <div class="row">
        @foreach($product as $prod)
            @if($prod->category_id == $category->id)
                <div class="col-md-3">
                    <div class="card p-3">
                        <div class="text-center">
                            <img src="{{asset('img/menu/menu-item-1.png')}}" width="200" alt="{{$prod->product_name}}">
                        </div>

                        <div class="product-details">

                            <span class="font-weight-bold d-block">R$ {{$prod->price}}</span>
                            <span>{{$prod->product_name}}</span>

                            <div class="buttons d-flex flex-row">
                                <div class="cart"><img width="30px" src="{{asset('img/icone/shopping-bag2.png')}}" alt="adicionar-ao-carrinho"></div><button class="btn btn-success cart-button btn-block"><span class="dot"></span>Add to cart </button>
                            </div>

                            <div class="weight">

                                <small class="text-black">{{round($prod->stock)}} Unidades</small>

                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
</div>
</section>
