<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="navbar-header">
                    <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a href="/" class="navbar-brand">Eu Que Fiz</a>
                </div>

                <div class="navbar-collapse collapse" id="mobile_menu">
                    <ul class="nav navbar-nav">
                        <li><a href="/sobre" class="dropdown-toggle" data-toggle="dropdown">Sobre <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">DropDown Um</a></li>
                                <li><a href="#">DropDown Dois</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Galeria</a></li>
                        <li><a href="/eventos">Eventos</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#"><img src="{{asset('storage/img/icone/shopping-bag.png')}}" width="30" height="25"></a>
                        </li>
                        <li><a href="/minha-conta"><span class="glyphicon glyphicon-user"></span> Minha conta</a></li>
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Cadastrar <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/entrar">Login</a></li>
                                <li><a href="#">Cadastrar</a></li>
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
