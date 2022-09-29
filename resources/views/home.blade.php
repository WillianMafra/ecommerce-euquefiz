@extends('layouts.layout')
    @section('mainContent')
    <div class="pt-5 video-home-page">
    <video autoplay muted id="myVideo" class="rounded">
        <source src="{{asset('img/video-background.mp4')}}" type="video/mp4">
    </video>
    <div id="videoEnd" style="display:none">Video end</div>

    @endsection
    @section('events')
<section>
        <!-- ======= Menu Section ======= -->
        <div class="container text-center ">
            <h2 class="font-weight-light my-5 subtitles">Nossos Eventos</h2>
            <div class="row mx-auto my-auto justify-content-center">
                <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" data-bs-interval="3000">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{asset('img/events/events-1.jpg')}}" class="img-fluid" alt="evento-culinario">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{asset('img/events/events-2.jpg')}}" class="img-fluid" alt="evento-culinario">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{asset('img/events/events-3.jpg')}}" class="img-fluid" alt="evento-culinario">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{asset('img/events/events-1.jpg')}}" class="img-fluid" alt="evento-culinario">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{asset('img/events/events-2.jpg')}}" class="img-fluid" alt="evento-culinario">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="3000">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-img">
                                        <img src="{{asset('img/events/events-3.jpg')}}" class="img-fluid" alt="evento-culinario">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
</section>
@endsection
@section('chefs')
        <section id="chefs" class="chefs section-bg">
            <div class="container chefs-container" data-aos="fade-up">
                <h2 class="font-weight-light my-5 subtitles text-center">Nossos Chefs</h2>
                    <div class="row gy-4">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/walter-white.jpg')}}" class="img-fluid" alt="master chef">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                </div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                        <span>Chef</span>

                                </div>
                            </div>
                        </div><!-- End Chefs Member -->
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/jesse.jpg')}}" class="img-fluid" alt="master chef">
                                        <div class="social">
                                            <a href=""><img class="icone" src="{{asset('img/icone/linkedin-icone.png')}}" alt="icone do linkedin"></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><img class="icone" src="{{asset('img/icone/instagram-icone.png')}}" alt="icone do instagram"></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                </div>
                                <div class="member-info">
                                    <h4>Jesse Pinkman</h4>
                                    <span>Entregador</span>

                                </div>
                            </div>
                        </div><!-- End Chefs Member -->
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/jimmy.png')}}" class="img-fluid" alt="master chef">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                </div>
                                <div class="member-info">
                                    <h4>Jimmy Mcgill</h4>
                                    <span>Advogado kkkk</span>

                                </div>
                            </div>
                        </div><!-- End Chefs Member -->
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/jimmy.png')}}" class="img-fluid" alt="master chef">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Jimmy Mcgill</h4>
                                    <span>Advogado kkkk</span>

                                </div>
                            </div>
                        </div><!-- End Chefs Member -->
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/jimmy.png')}}" class="img-fluid" alt="master chef">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Jimmy Mcgill</h4>
                                    <span>Advogado kkkk</span>

                                </div>
                            </div>
                        </div><!-- End Chefs Member -->
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/jimmy.png')}}" class="img-fluid" alt="master chef">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Jimmy Mcgill</h4>
                                    <span>Advogado kkkk</span>

                                </div>
                            </div>
                        </div><!-- End Chefs Member -->
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/jimmy.png')}}" class="img-fluid" alt="master chef">
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Jimmy Mcgill</h4>
                                    <span>Advogado kkkk</span>

                                </div>
                            </div>
                        </div><!-- End Chefs Member -->
                    </div>
            </div>
        </section>
@endsection
    @push('scripts')
        <script src="{{asset('js/carousel.js')}}"></script>
    @endpush
