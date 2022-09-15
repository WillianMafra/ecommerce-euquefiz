<!-- Aqui iremos apresentar sobre a empresa e o projeto. -->
@extends('layouts.layout')
@section('aboutus')
<div class="wrapper-about">
    <div class="testimonial">
        <article><br><br><br><b><br>
        <!-- <h2 class="font-weight-light my-5 subtitles">Sobre Nós!</h2> -->
            <h1 class="h1-about">Sobre nós</h1>
            <img class="about-img" src="{{asset('storage/img/logo-design/logosemfundo.png')}}" alt="">
            <blockquote class="blockquote-about">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora delectus est dolores ratione voluptates, odio obcaecati facilis, temporibus inventore, magni fugit asperiores non ipsum quibusdam a illum fuga amet nam!
            </blockquote>
            <h5>Eu que fiz!</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
            <p>chefs abaixo??</p>
        </article>
    </div>
</div>
@endsection
