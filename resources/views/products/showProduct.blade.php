@extends('layouts.layout')

<section class="bg-light">
    <div class="container pb-5 container-geral">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="{{asset('img/cardapio/congelados/bolinho de aipim.jpg')}}" alt="Card image cap" id="product-detail">
                </div>
            </div>
            <!-- col end -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">{{$product->product_name}}</h1>
                        <p class="h3 py-2">R$ {{$product->price}}</p>
                        <p class="py-2">
                            <i class="fa fa-star text-warning">@if($product->stock > 0 )Unidades  {{round($product->stock)}} @else  <b class="text-danger">Sem Estoque</b> @endif</i>

                        </p>
                        <h6>Descrição:</h6>
                        <p>{{$product->description}}</p>

                        <form action="{{route('addToCart', $product->id)}}" method="POST">
                        @csrf
                            <div class="col-auto">
                                <ul class="list-inline pb-3">
                                    <li class="list-inline-item text-right">
                                        <label for="product-quantity" class="p-2">Quantidade</label>
                                        <input type="number" name="quantity" id="product-quanity" >
                                    </li>
                                </ul>
                            </div>
                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Comprar</button>
                                </div>
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Adicionar Ao Carrinho</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@prepend('scripts')
    <script src="{{asset('js/app.js')}}"></script>
@endprepend
