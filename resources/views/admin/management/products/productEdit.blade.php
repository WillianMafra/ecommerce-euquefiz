@extends('admin.management.adminHeader')
@include('admin.management.subview.navbar')
<section id="formulario">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Formulário de Edição</h5>
                    <form enctype="multipart/form-data"
                          method="POST"
                          action="{{route('updateProduct', $product->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="product_name" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" name="product_name" class="form-control" value="{{ ($product->product_name)}}"></div>
                            @error('product_name')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Nome Inválido</small>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-sm-2 col-form-label">Preço R$</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" name="price" class="form-control" value="{{ ($product->price)}}"></div>
                            @error('price')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Preço Inválido</small>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="stock" class="col-sm-2 col-form-label">Estoque</label>
                            <div class="col-sm-10">
                                <input type="number" name="stock" class="form-control" value="{{($product->stock) }}"></div>
                            @error('stock')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Estoque Inválido</small>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Enviar Foto</label>
                            <div class="col-sm-10"><input class="form-control" type="file" id="formFile" name="image">
                                @error('image')
                                <small class="bg-danger text-white w-25 rounded" role="alert">{{$message}}</small>
                                @enderror
                            </div>
                            @if($product->image)
                                <div class="p-2 w-full">
                                    <img class="object-cover w-2/5"
                                         src="{{asset($product->image)}}" width="100px"
                                         alt="product-image">
                                    <a class="mt-3 text-indigo-500 inline-flex items-center" href="{{route('destroyImage',$product->id)}}">Deletar imagem
                                    </a>
                                </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Descrição</label>
                            <div class="col-sm-10"><textarea name="description" class="form-control" style="height: 70px">{{ $product->description }}</textarea>
                                @error('description')
                                <small class="bg-danger text-white w-25 rounded" role="alert">Descrição Inválida</small>
                                @enderror
                            </div>
                        </div>
                        {{--                        <div class="row mb-3">--}}
                        {{--                            <label class="col-sm-2 col-form-label">Categorias</label>--}}
                        {{--                            <div class="col-sm-10">--}}
                        {{--                                <select class="form-select" aria-label="Default select example">--}}
                        {{--                                    <option selected>Abrir as Opções</option>--}}
                        {{--                                    <option value="1">Categoria 1</option>--}}
                        {{--                                    <option value="2">Categoria 2</option>--}}
                        {{--                                    <option value="3">Categoria 3</option>--}}
                        {{--                                </select>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="text-center">
                            <div class=""><button type="submit" class="btn bg-success text-light">Confirmar</button></div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</section>
