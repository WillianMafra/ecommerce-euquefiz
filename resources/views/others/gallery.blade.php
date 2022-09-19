@extends('layouts.layout')
@push('style')
<link rel="stylesheet" href="{{asset('css/gallery/gallery.css')}}">
@endpush

@section('gallery')



<div class="gallery-image">
    <div class="testimonial">
    <h1 class="h1-gallery">Galeria</h1>
        <div class="img-caixa">
            <img src="https://picsum.photos/350/250?image=444" alt="" />
            <div class="transparent-caixa">
                <div class="caption">
                    <p>Library</p>
                    <p class="opacity-low">Architect Design</p>
                </div>
            </div>
        </div>
        <div class="img-caixa">
            <img src="https://picsum.photos/350/250/?image=232" alt="" />
            <div class="transparent-caixa">
                <div class="caption">
                    <p>Night Sky</p>
                    <p class="opacity-low">Cinematic</p>
                </div>
            </div>
        </div>
        <div class="img-caixa">
            <img src="https://picsum.photos/350/250/?image=431" alt="" />
            <div class="transparent-caixa">
                <div class="caption">
                    <p>Tea Talk</p>
                    <p class="opacity-low">Composite</p>
                </div>
            </div>
        </div>
        <div class="img-caixa">
            <img src="https://picsum.photos/350/250?image=474" alt="" />
            <div class="transparent-caixa">
                <div class="caption">
                    <p>Road</p>
                    <p class="opacity-low">Landscape</p>
                </div>
            </div>
        </div>
        <div class="img-caixa">
            <img src="https://picsum.photos/350/250?image=344" alt="" />
            <div class="transparent-caixa">
                <div class="caption">
                    <p>Sea</p>
                    <p class="opacity-low">Cityscape</p>
                </div>
            </div>
        </div>
        <div class="img-caixa">
            <img src="https://picsum.photos/350/250?image=494" alt="" />
            <div class="transparent-caixa">
                <div class="caption">
                    <p>Vintage</p>
                    <p class="opacity-low">Cinematic</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@prepend('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endprepend
@push('scripts')
<script src="{{asset('js/gallery.js')}}"></script>
@endpush