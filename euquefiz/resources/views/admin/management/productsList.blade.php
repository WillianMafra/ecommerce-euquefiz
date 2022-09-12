@extends('admin.management.adminHeader')
<section class="container w-50 p-3 mx-auto ">
<div class="card mt-8">
    <div class="card-header">
        Manage Products
    </div>
    <div class="card-body">
        <table class="table align-middle mb-0 bg-white ">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</section>
