@extends('layouts.layout')
    @section('mainContent')
    <div class="pt-5 video-home-page">
    <video autoplay muted id="myVideo" class="rounded">
        <source src="{{asset('img/video-background.mp4')}}" type="video/mp4">
    </video>
{{--    <div id="videoEnd" style="display:none">Video end</div>--}}

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
            <div class="container" data-aos="fade-up">
                <h2 class="font-weight-light my-5 subtitles text-center">Nossos Chefs</h2>
                    <div class="row gy-4">
                        <div class="col py-1 px-lg-1 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/Brunodev.jpg')}}" class="img-fluid" alt="master chef">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href="https://www.linkedin.com/in/bruno-hoffmann-schumacher-0b4631168/"><img class="icone" src="{{asset('img/icone/linkedin-icone.png')}}" alt="icone do linkedin"></a>
                                            <a href=""><img class="icone" src="{{asset('img/icone/instagram-icone.png')}}" alt="icone do instagram"></a>
                                        </div>
                                </div>
                                <div class="member-info">
                                    <h4>Bruno</h4>
                                        <span>Dev</span>
                                        
                                </div>
                            </div>
                        </div><!-- End Chefs Member -->
                        <div class="col py-1 px-lg-1 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/Claudiodev.jpg')}}" class="img-fluid" alt="master chef">
                                        <div class="social">
                                            <a href="https://www.linkedin.com/in/cl%C3%A1udio-j%C3%BAnior-872444251/"><img class="icone" src="{{asset('img/icone/linkedin-icone.png')}}" alt="icone do linkedin"></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href="https://www.instagram.com/juchocolate77"><img class="icone" src="{{asset('img/icone/instagram-icone.png')}}" alt="icone do instagram"></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                </div>
                                <div class="member-info">
                                    <h4>Cláudio</h4>
                                    <span>Dev</span>
                                        
                                </div>
                            </div>
                        </div><!-- End Chefs Member -->
                        <div class="col py-1 px-lg-1 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/Deboradev.jpg')}}" class="img-fluid" alt="master chef">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                            <a href="https://www.linkedin.com/in/deborabl/"><img class="icone" src="{{asset('img/icone/linkedin-icone.png')}}" alt="icone do linkedin"></a>
                                            <a href=""><img class="icone" src="{{asset('img/icone/instagram-icone.png')}}" alt="icone do instagram"></a> 
                                        </div>
                                </div>
                                <div class="member-info">
                                    <h4>Débora</h4>
                                    <span>Dev</span>
                                        
                                </div>
                            </div>
                        </div><!-- End Chefs Member -->
                        <div class="col py-1 px-lg-1 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/Marlidev.jpg')}}" class="img-fluid" alt="master chef">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                            <a href="https://www.linkedin.com/in/marlimeza/"><img class="icone" src="{{asset('img/icone/linkedin-icone.png')}}" alt="icone do linkedin"></a>
                                            <a href=""><img class="icone" src="{{asset('img/icone/instagram-icone.png')}}" alt="icone do instagram"></a>
                                        
                                        </div>
                                </div>
                                <div class="member-info">
                                    <h4>Marli</h4>
                                    <span>Dev</span>
                                       
                                </div>
                            </div>
                        </div><!-- End Chefs Member -->
                        <div class="col py-1 px-lg-1 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/Matheusdev.jpg')}}" class="img-fluid" alt="master chef">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                            <a href="https://www.linkedin.com/in/matheussan/"><img class="icone" src="{{asset('img/icone/linkedin-icone.png')}}" alt="icone do linkedin"></a>
                                            <a href=""><img class="icone" src="{{asset('img/icone/instagram-icone.png')}}" alt="icone do instagram"></a>
                                        </div>
                                </div>
                                <div class="member-info">
                                    <h4>Matheus</h4>
                                    <span>Dev</span>
                                        
                                </div>
                            </div>
                        </div><!-- End Chefs Member -->
                        <div class="col py-1 px-lg-1 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/Thiagodev.jpg')}}" class="img-fluid" alt="master chef">
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                            <a href="https://www.linkedin.com/in/thiagowolter/"><img class="icone" src="{{asset('img/icone/linkedin-icone.png')}}" alt="icone do linkedin"></a>
                                            <a href=""><img class="icone" src="{{asset('img/icone/instagram-icone.png')}}" alt="icone do instagram"></a>
                                        </div>
                                </div>
                                <div class="member-info">
                                    <h4>Thiago</h4>
                                    <span>Dev</span>
                                        
                                </div>
                            </div>
                        </div><!-- End Chefs Member -->
                        <div class="col py-1 px-lg-1 d-flex align-items-stretch alte"  data-aos="fade-up" data-aos-delay="300">
                            <div class="chef-member">
                                <div class="member-img">
                                    <img src="{{asset('img/chefs/Williandev.jpg')}}" class="img-fluid" alt="master chef">
                                        <div class="social">
                                            <a href=""><i   class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                            <a href="https://www.linkedin.com/in/willnmafra/"><img class="icone" src="{{asset('img/icone/linkedin-icone.png')}}" alt="icone do linkedin"></a>
                                            <a href=""><img class="icone" src="{{asset('img/icone/instagram-icone.png')}}" alt="icone do instagram"></a>
                                        </div>
                                </div>
                                <div class="member-info">
                                    <h4>Willian</h4>
                                    <span>Dev</span>
                                        
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
