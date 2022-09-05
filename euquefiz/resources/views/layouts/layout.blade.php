

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="navbar-header">
                    <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a href="{{route('home')}}" class="navbar-brand">Eu Que Fiz</a>
                </div>

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
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
        .bg {     
        background-color: danger
        }
    </style>
