<<<<<<< HEAD
<<<<<<< HEAD


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
=======
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>@yield('Eu Que Fiz', 'Eu Que Fiz')</title>
</head>
<header>
    <nav class="navbar navbar-default  navbar-inverse navbar-dark " role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{route('home')}}" class="navbar-brand">
                    <img class="img-thumbnail" id="icone-logo-principal" src="{{asset('storage/img/logo-design/EuQueFizLogo.jpg')}}" width="70" height="30" alt="" />
                </a>
            </div>
>>>>>>> 485e1a691ab22973c0c509fd900c3af7be4f8aa8

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('products')}}">Produtos</a></li>
                    <li><a href="{{route('events')}}">Eventos</a></li>
                    <li><a href="{{route('aboutus')}}">Sobre</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Quem Somos? <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Integrante 1</a></li>
                            <li><a href="#">Integrante 2</a></li>
                            <li><a href="#">Integrante 3</a></li>
                            <li><a href="#">Integrante 4</a></li>
                            <li><a href="#">Integrante 5</a></li>
                            <li><a href="#">Integrante 6</a></li>
                            <li><a href="#">Integrante 7</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#"><img src="{{asset('storage/img/icone/shopping-bag.png')}}" alt="icone-carrinho" width="30" height="25"></a>
                    </li>
                    <li><a href="{{route('account')}}"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                    <li><a  class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Cadastrar <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Cadastrar</a></li>

<<<<<<< HEAD
                <div class="navbar-collapse collapse" id="mobile_menu">
                    <ul class="nav navbar-nav">
                        
                    <li><a href="{{route('products')}}">Produtos</a></li>
                        
                        <li><a href="{{route('events')}}">Eventos</a></li>
                        
                        <li><a href="/sobre" class="dropdown-toggle" data-toggle="dropdown">Congelados <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a>Lasanhas<span class="caret"></span></a></li>
                                    <ul class="dropdown-menu">
                                        <ul>
                                            <li>espinafre</li>
                                            <li>bolonhesa</li>
                                            <li>frango</li>
                                        </ul>
                                    </ul>
                                <li><a href="#">Panquecas</a></li>
                                <li><a href="#">Esconddinhos</a></li>
                                <li><a href="#">Empadões</a></li>
                                <li><a href="#">Pizzas</a></li>
                                <li><a href="#">Bolinhos de Aipim</a></li>
                            </ul>
                        </li>
                        <li><a href="/eventos">Eventos</a></li>
=======
<head><!-- CSS only -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    @stack('style')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">

</head>
<header id="header" class="header fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto me-lg-0">
            <img src="{{asset('storage/img/logo-design/EuQueFizLogo.jpg')}}" alt="logo-eu-que-fiz">
            <h1>Eu que Fiz</h1>
        </a>

        <nav id="navbar" class="navbar navbar-expand-sm ">
            <ul>
                <li class="dropdown"><a href="{{route('showAllProducts')}}"><span>Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a href="{{route('events')}}">Eventos</a></li>
                <li class="dropdown"><a href="#"><span>Quem Somos?</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="#">Integrante 1</a></li>
                        <li><a href="#">Integrante 2</a></li>
                        <li><a href="#">Integrante 3</a></li>
                        <li><a href="#">Integrante 4</a></li>
                        <li><a href="#">Integrante 5</a></li>
                        <li><a href="#">Integrante 6</a></li>
                        <li><a href="#">Integrante 7</a></li>
>>>>>>> be85cb284dd18b99af68acbc2d7e53284067c029
                    </ul>
                </li>
                <li><a href="{{route('aboutus')}}">Sobre</a></li>
                <li><a href="">Galeria</a></li>

                <li><a href="{{route('account')}}">Perfil</a></li>
                <li>
                    <a href="#"><img src="{{asset('storage/img/icone/shopping-bag.png')}}" alt="icone-carrinho" width="30" height="25">
                    </a>
                </li>
                <li class="dropdown"><a href="#"><span>Login / Cadastrar</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{route('login')}}">Login</a></li>
                        <li><a href="{{route('register')}}">Cadastro</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- .navbar -->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header><!-- End Header -->
@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
        <div class="row gy-3">
            <div class="col-lg-3 col-md-6 d-flex">
                <img  width="30px" height="30px"  src="{{asset('storage/img/icone/shopping-bag.png')}}">
                <div>
                    <h4>Endereço</h4>
                    <p>
                        Rua  <br>
                        Cidade, (Sigla Estado) CEP - PAIS<br>
                    </p>
                </div>
<<<<<<< HEAD
=======
                        </ul>
                    </li>
                </ul>
>>>>>>> 485e1a691ab22973c0c509fd900c3af7be4f8aa8
=======

>>>>>>> be85cb284dd18b99af68acbc2d7e53284067c029
            </div>

            <div class="col-lg-3 col-md-6 footer-links d-flex">
                <img  width="30px" height="30px"  src="{{asset('storage/img/icone/shopping-bag.png')}}">
                <div>
                    <h4>Reservas</h4>
                    <p>
                        <strong>Número</strong> (XX) XXXX-XXXX<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links d-flex">
                <img  width="30px" height="30px"  src="{{asset('storage/img/icone/shopping-bag.png')}}">
                <div>
                    <h4>Horário de Abertura</h4>
                    <p>
                        <strong>Inserir Horários</strong> Até esse horario<br>
                        Coloque aqui excessões
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Nós Siga</h4>
                <div class="social-links d-flex">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

        </div>
    </div>
</footer>
<<<<<<< HEAD
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
        .bg {     
        background-color: danger
        }
    </style>
=======
<!-- End Footer -->
<input type="image"src="{{asset('storage/img/icone/scrollup.png')}}" id="bottonUp"  class="scroll-top d-flex align-items-center justify-content-center">
{{--<div id="preloader"></div>--}}


<!-- JavaScript Bundle with Popper -->
@stack('scripts')
<script src="https://plugin.handtalk.me/web/latest/handtalk.min.js"></script>

<script>

    var ht = new HT({

        token: "4f60ffe8202947dff1b21ebc65ffe9bf"

    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

>>>>>>> be85cb284dd18b99af68acbc2d7e53284067c029
