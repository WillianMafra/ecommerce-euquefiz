@extends('layouts.layout')
@push('style')
    <link rel="stylesheet" href="{{asset('css/aboutus/aboutus.css')}}">
@endpush
@section('aboutus')
<div class="wrapper-about">
    <div class="testimonial">
        <article>
            <h1 class="h1-about">Sobre Nós</h1>
            <img class="about-img border-0" src="{{asset('img/logo-design/logosemfundo.png')}}"  alt="">
            <blockquote class="blockquote-about">
            Trata-se de um e-commerce de produtos alimentícios congelados e eventos culinários.
            Utilizando os conceitos aprendidos sobre Metodologias Ágeis, nós construimos um e-commerce responsivo com banco de dados MySql
utilizando recursos para registrar pratos, alimentos, valores, usuários, pedidos e muito mais.

As páginas foram desenvolvidas utilizando HTML,CSS,PHP e Laravel.

            </blockquote>
            <h5>Eu que fiz!</h5>
            <p>Sua felicidade, nossa missão.</p>
        </article>
    </div>
</div>
@endsection
