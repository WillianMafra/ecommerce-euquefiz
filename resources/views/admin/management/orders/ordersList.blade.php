@extends('admin.management.adminHeader')
@include('admin.management.subview.navbar')
@section('search')
    <div class="search-bar p-3 ">
        <form class="search-form d-flex align-items-center" method="GET" action="{{route('ordersList')}}" autocomplete="off">
            <input type="text" name="search" placeholder="Pesquisar Produtos" title="Procurar Produtos"><button type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div>
@endsection
<section id="products">
    <div class="col-xs-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                @if(!empty($message))
                    <div class="text-white alert alert-success bg-success text-center">{{$message}}</div>
                @endif
                <h5 class="card-title text-center">Lista de Produtos</h5>
                <table class="table table-striped table-hover table-scrollable">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Total</th>
                        <th scope="col">User</th>
                        <th scope="col">Data</th>
                        <th scope="col" class="text-warning">Zerar Ordens</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>

                            <td >{{ $product->product_name }}</td>

                            <td>R$ {{ $product->price }}</td>

                            @foreach($categories as $category)
                                @if($category->id == $product->category_id)
                                    <td>{{ $category->name }}</td>
                                @endif
                            @endforeach

                            <form method="POST" action="" onsubmit="return confirm('Deseja Remover ? Esta ação não poderá ser desfeita.')">
                                @method('DELETE')
                                @csrf
                                <td>
                                    <button type="submit" class="border-0"><img src="{{asset('img/icone/recycle-bin.png')}}" width="20px" alt="apagar item">
                                    </button>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
{{ $products->links() }}
