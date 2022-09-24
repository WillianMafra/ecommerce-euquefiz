<!DOCTYPE html>
<html lang="pt-br">
<head><!-- CSS only -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @stack('style')
    <link href="{{asset('img/logo-design/LogoSemFundo.png')}}" rel="icon">
    <link href="{{asset('img/logo-design/LogoSemFundo.png')}}" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">

    <title>Eu Que Fiz</title>
</head>
<body>
<main id="home-page" class="">
    <header id="header" class="header fixed-top d-flex align-items-center pb-3">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="{{route('home')}}" class="navbar-brand" >

                <img src="{{asset('img/logo-design/Euquefizlogo.png')}}" class="mt-5" width="170px" alt="logo-eu-que-fiz">
            </a>
            <nav id="navbar" class="navbar navbar-expand-sm ">
                <ul>
                    <li class="dropdown"><a href="{{route('showAllProducts')}}"><span>Cardápio</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            @if(!empty($categories))
                                @foreach($categories as $category)
                                <li class="dropdown"><a href="{{route('categoryPage',$category->id)}}"><span>{{$category->name}}</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            </li>
                            @endforeach
                            @endif
                            <li><a href="{{route('productsList')}}">Ver Todos</a></li>

                        </ul>
                    </li>
                    <li><a href="{{route('events')}}">Eventos</a></li>
                    <li><a href="{{route('gallery')}}">Galeria</a></li>
                    <li><a href="{{route('aboutus')}}">Sobre</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Devs</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            <li><a href="https://www.linkedin.com/in/bruno-hoffmann-schumacher-0b4631168/">Integrante 1</a></li>
                            <li><a href="Claudio   ">Integrante 2</a></li>
                            <li><a href="https://www.linkedin.com/in/deborabl/">Integrante 3</a></li>
                            <li><a href="https://www.linkedin.com/in/marlimeza/">Integrante 4</a></li>
                            <li><a href="https://www.linkedin.com/in/matheussan/">Integrante 5</a></li>
                            <li><a href="https://www.linkedin.com/in/thiagowolter/">Integrante 6</a></li>
                            <li><a href="https://www.linkedin.com/in/willnmafra/">Integrante 7</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('management')}}">Admin</a></li>
                    <li>
                        <a href="{{route('carShopping')}}">
                            <img src="{{asset('img/icone/shopping-bag.png')}}" alt="icone-carrinho" width="30" height="25">
                        </a>
                    </li>
                    @guest
                    <li class="dropdown">
                        <a href="#"><span>Login / Cadastrar</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Cadastro</a></li>
                        </ul>
                    </li>
                    @endguest
                    @auth
                    <li><a href="{{route('dices')}}">Perfil</a></li>
                    <li><a href="{{route('logout')}}">Logout</a></li>
                    @endauth
                    <li>
                </ul>
            </nav>
            <img width="30px" src="{{asset('img/icone/dropdown.png')}}" class="mobile-nav-toggle mobile-nav-show bi bi-list" alt="abrir menu">
            <img src="{{asset('img/icone/dropdown.png')}}" width="20px" class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x" alt="fechar-menu">
        </div>
    </header>
    @yield('gallery')
    @yield('aboutus')
    @yield('events')
    @yield('chefs')
</main>
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="container align-items-center">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
                <img width="30px" height="30px" src="{{asset('img/icone/shopping-bag.png')}}" alt="endereço para contato">
                <div>
                    <h4>Endereço</h4>
                    <p>
                        Rua <br />
                        Cidade, (Sigla Estado) CEP - PAIS <br />
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-links d-flex">
                <img  width="30px" height="30px"  src="{{asset('img/icone/shopping-bag.png')}}" alt="contato para reservas">
                <div>
                    <h4>Reservas</h4>
                    <p>
                        <strong>Número</strong> (XX) XXXX-XXXX <br />
                        <strong>Email:</strong> info@example.com <br />
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-links d-flex">
                <img  width="30px" height="30px" src="{{asset('img/icone/shopping-bag.png')}}" alt="horário de funcionamento">
                <div>
                    <h4>Horário de Abertura</h4>
                    <p>
                        <strong>Inserir Horários</strong> Até esse horário <br />
                        Coloque aqui excessões
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6  footer-links">
                <h4>Nós Siga</h4>
                <div class="d-flex">
                    <a href="#" >
                        <img class="icone" src="{{asset('img/icone/twitter-icone.png')}}" alt="icone do twitter"></a>
                    <a href="#">
                        <img class="icone" src="{{asset('/img/icone/github-icone.png')}}" alt="icone do github">
                    </a>
                    <a href="#">
                        <img class="icone" src="{{asset('img/icone/linkedin-icone.png')}}" alt="icone do linkedin">
                    </a>
                    <a href="#">
                            <img class="icone" src="{{asset('img/icone/instagram-icone.png')}}" alt="icone do instagram">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<input type="image" src="{{asset('img/icone/scrollup.png')}}" id="bottonUp"  class="scroll-top d-flex align-items-center justify-content-center" alt="subir para o topo da página">
{{--<div id="preloader"></div>--}}
<!-- JavaScript Bundle with Popper -->
@stack('scripts')
<script src="{{asset('js/app.js')}}"></script>
<script src="https://plugin.handtalk.me/web/latest/handtalk.min.js"></script>
<script>

    var ht = new HT({

        token: "4f60ffe8202947dff1b21ebc65ffe9bf"

    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
