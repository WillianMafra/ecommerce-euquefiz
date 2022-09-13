@extends('admin.management.adminHeader')

<section id="products">
    <div class="col-xs-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                @if(!empty($message))
                <div class="text-white alert alert-success bg-success text-center">{{$message}}</div>
                @endif
                <h5 class="card-title text-center">Lista de Produtos</h5>
                <table class="table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Estoque</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="">
                                <td class="">{{ $product->product_name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>@if($product->stock > 0){{ round($product->stock) }} @else <strong class="bg-danger p-1 text-white rounded">Sem Estoque</strong> @endif</td>
                                <td><img src="{{asset('storage/img/icone/edit.png')}}" width="20px" alt="editar item"></td>
                                <td><img src="{{asset('storage/img/icone/recycle-bin.png')}}" width="20px" alt="apagar item"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
{{ $products->links() }}
