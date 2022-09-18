<!-- Lista de fotos de eventos passados e solicitar evento personalizado (com campo de observações) -->
@extends('layouts.layout')
@section('events')
<section>
    <!-- ======= Menu Section CAROUSEL FOTOS ======= -->
    <div class="container text-center ">
        <h2 class="font-weight-light my-5 subtitles">Solicite um de Nossos Eventos</h2>
        <div class="row mx-auto my-auto justify-content-center">
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('storage/img/events/events-1.jpg')}}" class="img-fluid" alt="evento-culinario">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('storage/img/events/events-2.jpg')}}" class="img-fluid" alt="evento-culinario">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('storage/img/events/events-3.jpg')}}" class="img-fluid" alt="evento-culinario">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('storage/img/events/events-1.jpg')}}" class="img-fluid" alt="evento-culinario">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('storage/img/events/events-2.jpg')}}" class="img-fluid" alt="evento-culinario">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-img">
                                    <img src="{{asset('storage/img/events/events-3.jpg')}}" class="img-fluid" alt="evento-culinario">
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
            <!-- DESCRIÇÃO EVENTOS -->
            <br><br>
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <p class="events-font">Contrate eventos para casamentos, formaturas etc blalalaSomething short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, faça um orçamento!</p>
                </div>
            </div>
            <!-- FORM PARA SOLICITAR EVENTO  -->
            <div class="form-body">
                <div class="row">
                    <div class="form-holder">
                        <div class="form-content">
                            <div class="form-items">
                                <h3>SOLICITAR ORÇAMENTO</h3>
                                    <form class="requires-validation" action="https://formsubmit.co/thiagowolter7@gmail.com" method="POST" novalidate>

                                        <div class="col-md-12">
                                            <select class="form-select mt-3" required>
                                                <option selected disabled value="">Tipo de Evento</option>
                                                <option value="jweb">Casamento</option>
                                                <option value="sweb">Formatura</option>
                                                <option value="pmanager">Aniversário</option>
                                                <option value="pmanager">Evento em Casa</option>
                                                <option value="pmanager">Outro</option>
                                            </select>
                                            <div class="valid-feedback">Evento selecionado</div>
                                            <div class="invalid-feedback">Por favor, selecione!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-control" type="text" name="message" placeholder="Descreva o evento" required>
                                            <div class="valid-feedback">Evento descrito!</div>
                                            <div class="invalid-feedback">Descreva seu evento!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-control" type="email" name="email" placeholder="Endereço de E-mail" required>
                                            <div class="valid-feedback">Email válido!</div>
                                            <div class="invalid-feedback">Insira seu email!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-control" type="text" name="cidade" placeholder="Cidade" required>
                                            <div class="valid-feedback">Cidade inserida!</div>
                                            <div class="invalid-feedback">Insira a cidade!</div>
                                        </div>

                                        <div class="col-md-12">
                                            <input class="form-control" type="text" name="local" placeholder="Local" required>
                                            <div class="valid-feedback">Local inserido!</div>
                                            <div class="invalid-feedback">Insira o local!</div>
                                        </div>


                                        <div class="col-md-12 mt-3">
                                            <label class="mb-3 mr-1" for="gender">Gender: </label>

                                            <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
                                            <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>

                                            <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
                                            <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>

                                            <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off" required>
                                            <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                                            <div class="valid-feedback mv-up">You selected a gender!</div>
                                            <div class="invalid-feedback mv-up">Please select a gender!</div>

                                            <input type="hidden" name="_captcha" value="false" />

                                            <input type="hidden" name="_next" value="{{route('events')}}" />
                                        </div>
                                        <div class="form-button mt-3">
                                            <button id="submit" type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

@endsection
@prepend('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endprepend
@push('scripts')
<script src="{{asset('js/carousel.js')}}"></script>
<script src="{{asset('js/form.js')}}"></script>
@endpush
