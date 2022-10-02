<aside id="sidebar" class="sidebar bg-dark">
    <ul class="sidebar-nav " id="sidebar-nav">
        <li class="nav-item"><a class="nav-link " href="{{route('management')}}"><i class="bi bi-grid"></i> <span>Voltar ao Dashboard</span></a></li>
        <li class="nav-item  bg-light">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-menu-button-wide "></i><span>Usuarios</span><i class="bi bi-chevron-down ms-auto"></i></a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li> <a href="{{route('usersList')}}"><i class="bi bi-circle"></i><span>Listar Usuários</span></a></li>
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
