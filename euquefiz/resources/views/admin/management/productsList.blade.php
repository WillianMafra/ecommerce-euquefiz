@extends('admin.management.adminHeader')
@if(Session::has('message'))
    <p class="alert alert-success {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<section id="products">
    <div class="col-xs-4 col-sm-6">
        <div class="card">
            <div class="card-body">
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
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
{{ $products->links() }}
