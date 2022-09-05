<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">
    <title>@yield('Eu Que Fiz', 'Eu Que Fiz')</title>
</head>
<header>
    <nav class="navbar navbar-default background-nav  navbar-inverse navbar-dark " role="navigation">
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

            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav  ">

                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-toggle">Congelados<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            </ul>
                        </li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                    </li>
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
                <ul class="nav navbar-nav navbar-right registro">
                    <li>
                        <a href="#"><img src="{{asset('storage/img/icone/shopping-bag.png')}}" alt="icone-carrinho" width="30" height="25"></a>
                    </li>
                    <li><a href="{{route('account')}}"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
                    <li><a  class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Cadastrar <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Cadastrar</a></li>
                <div class="navbar-collapse collapse" id="mobile_menu">
                    <ul class="nav navbar-nav">

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
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#"><img src="{{asset('storage/img/icone/shopping-bag.png')}}" width="30" height="25"></a>
                        </li>
                        <li><a href="{{route('account')}}"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li><a href="{{route('register')}}" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Cadastrar <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('login')}}">Login</a></li>
                                <li><a href="{{route('register')}}">Cadastrar</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>
<footer class="footer-espaco text-center">
    <div class="container-fluid mt-1" style="background-color:#eff5f5;">
        <div class="row  row-no-gutters">
            <div class="col-xs-12 col-sm-6 col-md-3" >
                <ul>
                    <li class="col-heading">Contatos</li>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:99-999-999-9999">Telefone Para Contato</a>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">Endereço</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope-square" aria-hidden="true"></i><a href="mailto:someone@yoursite.com?subject=Email Subject line">Nós Envie um E-mail</a>
                    </li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3" >
                <ul>
                    <li class="col-heading">Subheading</li>
                    <li><a href="#">Link to page</a></li>
                    <li><a href="#">Link to page</a></li>
                    <li><a href="#">Link to page</a></li>
                    <li><a href="#">Link to page</a></li>
                </ul>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-3" >
                <div class="col-heading">Eventos Recentes</div>
                    <a href=""><img class="img-thumbnail" src="{{asset('storage/img/logo-design/EuQueFizLogo.jpg')}}" width="60" alt="" /></a>
                    <a href=""><img class="img-thumbnail" src="{{asset('storage/img/logo-design/EuQueFizLogo.jpg')}}" width="60" alt="" /></a>
                    <a href=""><img class="img-thumbnail" src="{{asset('storage/img/logo-design/EuQueFizLogo.jpg')}}" width="60" alt="" /></a>
                    <a href=""><img class="img-thumbnail" src="{{asset('storage/img/logo-design/EuQueFizLogo.jpg')}}" width="60" alt="" /></a>
            </div>
        </div>

    </div>
</footer>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
