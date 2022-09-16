@extends('admin.management.adminHeader')
@section('adminDashboard')
<aside id="sidebar" class="sidebar bg-dark">
    <ul class="sidebar-nav " id="sidebar-nav">
        <li class="nav-item"><a class="nav-link " href="#"><i class="bi bi-grid"></i> <span>Dashboard</span></a></li>
        <li class="nav-item  bg-light">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-menu-button-wide "></i><span>Usuarios</span><i class="bi bi-chevron-down ms-auto"></i></a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="#"><i class="bi bi-circle"></i><span>Listar Usuários</span></a></li>
            </ul>
        </li>
        <li class="nav-item bg-light ">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-journal-text"></i><span>Produtos</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{route('list')}}"> <i class="bi bi-circle"></i><span>Listar Produtos</span> </a></li>
                <li> <a href="{{route('createProduct')}}"> <i class="bi bi-circle"></i><span>Adicionar Produto</span> </a></li>
                <li> <a href="{{route('categoriesList')}}"> <i class="bi bi-circle"></i><span>Listar Categorias</span> </a></li>
                <li> <a href="{{route('createCategory')}}"> <i class="bi bi-circle"></i><span>Adicionar Categoria</span> </a></li>
            </ul>
        </li>
        <li class="nav-item bg-light">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Outros</span><i class="bi bi-chevron-down ms-auto"></i> </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="#"> <i class="bi bi-circle"></i><span>Opcao 1</span> </a></li>
                <li> <a href="#"> <i class="bi bi-circle"></i><span>Opcao 2</span> </a></li>
            </ul>
        </li>
    </ul>
</aside>
<main id="main" class="main">
    <div class="pagetitle">
        <h1 id="fonte-cinza">Administração</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="#" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white">Dashboard</li>
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
                                        <h6>145</h6>
                                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Aumento</span>
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
                                        <h6>R$3,264</h6>
                                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">Aumento</span>
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
                                        <h6>1244</h6>
                                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">a menos</span>
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
                                        <th scope="col">Produto</th>
                                        <th scope="col">Preço</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row"><a href="#">#2457</a></th>
                                        <td>Brandon Jacob</td>
                                        <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                        <td>R$64</td>
                                        <td><span class="badge bg-success">Aprovado</span></td>
                                    </tr>
                                    <tr>
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
                                        <th scope="col">Imagem</th>
                                        <th scope="col">Produto</th>
                                        <th scope="col">Preço</th>
                                        <th scope="col">Quantidade</th>
                                        <th scope="col">Receita</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="{{asset('storage/img/pratos/feijoada.jpg')}}" alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                                        <td>R$64</td>
                                        <td class="fw-bold">124</td>
                                        <td>R$5,828</td>
                                    </tr>
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
                            <div class="activity-item d-flex">
                                <div class="activite-label">32 min</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content"> Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae</div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">56 min</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content"> Voluptatem blanditiis blanditiis eveniet</div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">2 h</div>
                                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                <div class="activity-content"> Voluptates corrupti molestias voluptatem</div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">1 dia</div>
                                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                <div class="activity-content"> Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore</div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">2 dias</div>
                                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                <div class="activity-content"> Est sit eum reiciendis exercitationem</div>
                            </div>
                            <div class="activity-item d-flex">
                                <div class="activite-label">4 semanas</div>
                                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                <div class="activity-content"> Dicta dolorem harum nulla eius. Ut quidem quidem sit quas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
