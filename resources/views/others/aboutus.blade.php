@extends('layouts.layout')
@push('style')
    <link rel="stylesheet" href="{{asset('css/aboutus/aboutus.css')}}">
@endpush
@section('aboutus')
<div class="wrapper-about">
    <div class="testimonial">
        <article>
            <h1 class="h1-about">Sobre Nós</h1>
            <img class="about-img" src="{{asset('storage/img/logo-design/logosemfundo.png')}}" alt="">
            <blockquote class="blockquote-about">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora delectus est dolores ratione voluptates, odio obcaecati facilis, temporibus inventore, magni fugit asperiores non ipsum quibusdam a illum fuga amet nam! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum, vitae hic inventore dicta tenetur corrupti eveniet quam amet repellendus omnis quis, rem molestias ratione a accusantium est natus animi ipsa.
            </blockquote>
            <h5>Eu que fiz!</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
        </article>
    </div>
</div>
@endsection
