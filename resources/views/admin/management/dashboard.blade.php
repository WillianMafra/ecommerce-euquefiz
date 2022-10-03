@extends('admin.management.adminHeader')
@section('adminDashboard')
    @include('admin.management.subview.navbar')
<main id="main" class="main">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="/" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white"><a href="{{route('management')}}">Dashboard</a></li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filtro</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Vendas <span>| Hoje</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-cart"></i></div>
                                    <div class="ps-3">
                                        <p><b> Total de Vendas Atuais</b> {{$rentability['quantity']}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filtro</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Receita <span>| Este Mês</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-currency-dollar"></i></div>
                                    <div class="ps-3">
                                        <h6>R$ {{$rentability['total']}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-12">
                        <div class="card info-card customers-card">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filtro</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Clientes <span>| Este Ano</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"> <i class="bi bi-people"></i></div>
                                    <div class="ps-3">
                                        <b><p class="text-success">Atualmente Temos {{$usersQuantity}} Clientes Registrados</p></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filtro</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Últimas Vendas <span>| Hoje</span></h5>
                                <table class="table table-borderless datatable">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Preco Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($lastDataByDate))
                                    @foreach($lastDataByDate as $data)
                                        <tr>
                                            <th scope="row">{{$data['id']}}</th>
                                            <td>{{$data['user_name']}}</td>
                                            <td>R$ {{$data['total']}}</td>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filtro</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                                </ul>
                            </div>
                            <div class="card-body pb-0">
                                <h5 class="card-title">Top Vendas <span>| Hoje</span></h5>
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th scope="col">Nota ID</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Preço Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($lastDataByTotal))
                                    @foreach($lastDataByTotal as $data)
                                    <tr>
                                        <th scope="row">{{$data['id']}}</th>
                                        <td>{{$data['user_name']}}</td>
                                        <td>R$ {{$data['total']}}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filtro</h6>
                            </li>
                            <li><a class="dropdown-item" href="#">Hoje</a></li>
                            <li><a class="dropdown-item" href="#">Este Mês</a></li>
                            <li><a class="dropdown-item" href="#">Este Ano</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Atividade Recente <span>| Hoje</span></h5>
                        <div class="activity">
                            @foreach($lastDataByTotal as $data)
                            <div class="activity-item d-flex">
                                <div class="activite-label">{{($data['created_at'])}}</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content">Usuário {{$data['user_name']}} Realizou uma Compra de R$ {{$data['total']}}</div>
                            </div>
                            @endforeach
                            @foreach($usersData as $userInfo)
                                @if($userInfo->id != 1)
                            <div class="activity-item d-flex">
                                <div class="activite-label">{{$userInfo->created_at->format('d/m/Y')}}</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content">{{$userInfo['name']}} Se Cadastrou</div>
                            </div>
                                    @endif
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
