@extends('layouts.layout')
@push('style')
    <link rel="stylesheet" href="{{asset('css/products/allproducts.css')}}">
@endpush
<main class="main" id="top">




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->

    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-4 overflow-hidden">

        <div class="container">
            <div class="row h-100">
                <div class="col-lg-7 mx-auto text-center mt-7 mb-5">
                    <h5 class="fw-bold fs-3 fs-lg-5 lh-sm">Popular items</h5>
                </div>
                <div class="col-12">
                    <div class="carousel slide" id="carouselPopularItems" data-bs-touch="false" data-bs-interval="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <div class="row gx-3 h-100 align-items-center">
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Cheese Burger</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Burger Arena</span></div><span class="text-1000 fw-bold">$3.88</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Toffe's Cake</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Top Sticks</span></div><span class="text-1000 fw-bold">$4.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Dancake</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Cake World</span></div><span class="text-1000 fw-bold">$1.99</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Crispy Sandwitch</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Fastfood Dine</span></div><span class="text-1000 fw-bold">$3.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Thai Soup</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Foody Man</span></div><span class="text-1000 fw-bold">$2.79</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <div class="row gx-3 h-100 align-items-center">
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Cheese Burger</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Burger Arena</span></div><span class="text-1000 fw-bold">$3.88</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Toffe's Cake</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Top Sticks</span></div><span class="text-1000 fw-bold">$4.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Dancake</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Cake World</span></div><span class="text-1000 fw-bold">$1.99</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Crispy Sandwitch</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Fastfood Dine</span></div><span class="text-1000 fw-bold">$3.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="#!" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Thai Soup</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Foody Man</span></div><span class="text-1000 fw-bold">$2.79</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <div class="row gx-3 h-100 align-items-center">
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Cheese Burger</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Burger Arena</span></div><span class="text-1000 fw-bold">$3.88</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Toffe's Cake</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Top Sticks</span></div><span class="text-1000 fw-bold">$4.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Dancake</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Cake World</span></div><span class="text-1000 fw-bold">$1.99</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Crispy Sandwitch</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Fastfood Dine</span></div><span class="text-1000 fw-bold">$3.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Thai Soup</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Foody Man</span></div><span class="text-1000 fw-bold">$2.79</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row gx-3 h-100 align-items-center">
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Cheese Burger</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Burger Arena</span></div><span class="text-1000 fw-bold">$3.88</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Toffe's Cake</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Top Sticks</span></div><span class="text-1000 fw-bold">$4.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Dancake</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Cake World</span></div><span class="text-1000 fw-bold">$1.99</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Crispy Sandwitch</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Fastfood Dine</span></div><span class="text-1000 fw-bold">$3.00</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-3"><img class="img-fluid rounded-3 h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="fw-bold text-1000 text-truncate mb-1">Thai Soup</h5>
                                                <div><span class="text-warning me-2"><i class="fas fa-map-marker-alt"></i></span><span class="text-primary">Foody Man</span></div><span class="text-1000 fw-bold">$2.79</span>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2"><a class="btn btn-lg btn-danger" href="" role="button">Order now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev carousel-icon" type="button" data-bs-target="#carouselPopularItems" data-bs-slide="prev"><span class="carousel-control-prev-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>
                        <button class="carousel-control-next carousel-icon" type="button" data-bs-target="#carouselPopularItems" data-bs-slide="next"><span class="carousel-control-next-icon hover-top-shadow" aria-hidden="true"></span><span class="visually-hidden">Next </span></button>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->





    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-8 overflow-hidden">

        <div class="container">
            <div class="row flex-center mb-6">
                <div class="col-lg-7">
                    <h5 class="fw-bold fs-3 fs-lg-5 lh-sm text-center text-lg-start">Search by Food</h5>
                </div>
                <div class="col-lg-4 text-lg-end text-center"><a class="btn btn-lg text-800 me-2" href="#" role="button">VIEW ALL <i class="fas fa-chevron-right ms-2"></i></a></div>
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
                                <div class="row h-100 align-items-center">
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Noodles</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Sub-sandwiches</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Chowmein</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <div class="row h-100 align-items-center">
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Noodles</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Sub-sandwiches</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Chowmein</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <div class="row h-100 align-items-center">
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Noodles</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Sub-sandwiches</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Chowmein</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row h-100 align-items-center">
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">pizza</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Burger</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Noodles</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Sub-sandwiches</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Chowmein</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl mb-5 h-100">
                                        <div class="card card-span h-100 rounded-circle"><img class="img-fluid rounded-circle h-100" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." />
                                            <div class="card-body ps-0">
                                                <h5 class="text-center fw-bold text-1000 text-truncate mb-2">Steak</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section>
        <div class="bg-holder" style="background-image:url({{asset('storage/img/menu/menu-item-1.png')}});background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="card card-span shadow-warning" style="border-radius: 35px;">
                        <div class="card-body py-5">
                            <div class="row justify-content-evenly">
                                <div class="col-md-3">
                                    <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img src="{{asset('storage/img/menu/menu-item-1.png')}}" width="100" alt="..." />
                                        <div class="d-flex d-lg-block d-xl-flex flex-center">
                                            <h2 class="fw-bolder text-1000 mb-0 text-gradient">Daily<br class="d-none d-md-block" />Discounts </h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hr-vertical">
                                    <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img src="{{asset('storage/img/menu/menu-item-1.png')}}" width="100" alt="..." />
                                        <div class="d-flex d-lg-block d-xl-flex flex-center">
                                            <h2 class="fw-bolder text-1000 mb-0 text-gradient">Live Tracking</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 hr-vertical">
                                    <div class="d-flex d-md-block d-xl-flex justify-content-evenly justify-content-lg-between"><img src="{{asset('storage/img/menu/menu-item-1.png')}}" width="100" alt="..." />
                                        <div class="d-flex d-lg-block d-xl-flex flex-center">
                                            <h2 class="fw-bolder text-1000 mb-0 text-gradient">Quick Delivery </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pb-5 pt-8">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-span mb-3 shadow-lg">
                        <div class="card-body py-0">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." /></div>
                                <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                    <h1 class="card-title mt-xl-5 mb-4">Best deals <span class="text-primary"> Crispy Sandwiches</span></h1>
                                    <p class="fs-1">Enjoy the large size of sandwiches. Complete your meal with the perfect slice of sandwiches.</p>
                                    <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="py-0">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-span mb-3 shadow-lg">
                        <div class="card-body py-0">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-md-0"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-start rounded-md-top-0" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." /></div>
                                <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                    <h1 class="card-title mt-xl-5 mb-4">Celebrate parties with <span class="text-primary">Fried Chicken</span></h1>
                                    <p class="fs-1">Get the best fried chicken smeared with a lip-smacking lemon chili flavor. Check out best deals for fried chicken.</p>
                                    <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->




    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pt-5">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-span mb-3 shadow-lg">
                        <div class="card-body py-0">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-xl-7 col-xxl-8 g-0 order-0 order-md-1"><img class="img-fluid w-100 fit-cover h-100 rounded-top rounded-md-end rounded-md-top-0" src="{{asset('storage/img/menu/menu-item-1.png')}}" alt="..." /></div>
                                <div class="col-md-7 col-xl-5 col-xxl-4 p-4 p-lg-5">
                                    <h1 class="card-title mt-xl-5 mb-4">Wanna eat hot & <span class="text-primary">spicy Pizza?</span></h1>
                                    <p class="fs-1">Pair up with a friend and enjoy the hot and crispy pizza pops. Try it with the best deals.</p>
                                    <div class="d-grid bottom-0"><a class="btn btn-lg btn-primary mt-xl-6" href="">PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end of .container-->

    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->


    <section class="py-0">
        <div class="bg-holder" style="background-image:url({{asset('storage/img/menu/menu-item-1.png')}});background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row flex-center">
                <div class="col-xxl-9 py-7 text-center">
                    <h1 class="fw-bold mb-4 text-white fs-6">Are you ready to order <br />with the best deals? </h1><a class="btn btn-danger" href="#"> PROCEED TO ORDER<i class="fas fa-chevron-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
</main>
