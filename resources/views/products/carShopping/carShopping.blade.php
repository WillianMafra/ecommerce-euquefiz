@extends('layouts.layout')
@push('style')
    <link rel="stylesheet" href="{{asset('css/others/carShopping.css')}}">
@endpush
<div class="cart_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title">Carrinho de Compras<small> (Voce tem X Itens no Carrinho) </small></div>

                    <div class="cart_items">
                        <ul class="cart_list">

                            <li class="cart_item clearfix">
                                <div class="cart_item_image img-thumbnail"><img src="{{asset('img/cardapio/congelados/bolinho de aipim.jpg')}}" alt=""></div>
                                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        <div class="cart_item_title">Nome</div>
                                        <div class="cart_item_text">Nome do Produto</div>
                                    </div>
                                    <div class="cart_item_quantity cart_info_col">
                                        <div class="cart_item_title">Quantidade</div>
                                        <div class="cart_item_text">Insira Quantidade</div>
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                        <div class="cart_item_title">Preco</div>
                                        <div class="cart_item_text">Preco Aqui</div>
                                    </div>
                                    <div class="cart_item_total cart_info_col">
                                        <div class="cart_item_title">Total</div>
                                        <div class="cart_item_text">Total Aqui</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="order_total">
                        <div class="order_total_content text-md-right">
                            <div class="order_total_title">Total da Compra TITULO:</div>
                            <div class="order_total_amount">Total da Compra</div>
                        </div>
                    </div>
                    <div class="cart_buttons"> <button type="button" class="button cart_button_clear">Continue Shopping</button> <button type="button" class="button cart_button_checkout">Add to Cart</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@prepend('scripts')
    <script src="{{asset('js/app.js')}}"></script>
@endprepend
