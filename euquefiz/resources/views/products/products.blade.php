@extends('layouts.layout')
@push('style')
    <link rel="stylesheet" href="{{asset('css/products/allproducts.css')}}">
@endpush

<main class="main" id="top">
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">

            <div class="section-header my-3">
                <h2>Nossos Principais Pratos</h2>
                <p>Nós <span>Que Fizemos</span></p>
            </div>

            <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <li class="nav-item">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                        <h4>Aperitivos</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
                        <h4>Café da Manhã</h4>
                    </a><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
                        <h4>Almoço</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
                        <h4>Jantar</h4>
                    </a>
                </li><!-- End tab nav item -->

            </ul>

            <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                <div class="tab-pane fade active show" id="menu-starters">

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Starters</h3>
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 menu-item">
                            <a href="" class="glightbox"><img src="{{asset('storage/img/menu/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                            <h4>Magnam Tiste</h4>
                            <p class="ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </p>
                            <p class="price">
                                $5.95
                            </p>
                        </div><!-- Menu Item -->

                    </div>
                </div><!-- End Starter Menu Content -->

                <div class="tab-pane fade" id="menu-breakfast">

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Breakfast</h3>
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 menu-item">
                            <a href="" class="glightbox"><img src="{{asset('storage/img/menu/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                            <h4>Magnam Tiste</h4>
                            <p class="ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </p>
                            <p class="price">
                                $5.95
                            </p>
                        </div><!-- Menu Item -->

                    </div>
                </div><!-- End Breakfast Menu Content -->

                <div class="tab-pane fade" id="menu-lunch">

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Lunch</h3>
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 menu-item">
                            <a href="" class="glightbox"><img src="{{asset('storage/img/menu/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                            <h4>Magnam Tiste</h4>
                            <p class="ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </p>
                            <p class="price">
                                $5.95
                            </p>
                        </div><!-- Menu Item -->
                    </div>
                </div><!-- End Lunch Menu Content -->

                <div class="tab-pane fade" id="menu-dinner">

                    <div class="tab-header text-center">
                        <p>Menu</p>
                        <h3>Dinner</h3>
                    </div>

                    <div class="row gy-5">

                        <div class="col-lg-4 menu-item">
                            <a href="" class="glightbox"><img src="{{asset('storage/img/menu/menu-item-1.png')}}" class="menu-img img-fluid" alt=""></a>
                            <h4>Magnam Tiste</h4>
                            <p class="ingredients">
                                Lorem, deren, trataro, filede, nerada
                            </p>
                            <p class="price">
                                $5.95
                            </p>
                        </div><!-- Menu Item -->

                    </div>
                </div><!-- End Dinner Menu Content -->

            </div>

        </div>
    </section><!-- End Menu Section -->
    <section class="py-8 overflow-hidden">



    </section>

    <section class="py-0">
        <div class="bg-holder" style="background-image:url({{asset('storage/img/menu/menu-item-1.png')}});background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row flex-center">
                <div class="col-xxl-9 py-7 text-center">
                    <h1 class="fw-bold mb-4 text-white fs-6">Preparado para pedir<br />com os melhores preços?</h1><a class="btn btn-danger" href="#">Continuar o pedido<i class="fas fa-chevron-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
</main>
