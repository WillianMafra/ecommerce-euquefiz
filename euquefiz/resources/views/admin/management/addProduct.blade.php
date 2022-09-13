@extends('admin.management.adminHeader')
<section id="formulario">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Inserir Produto</h5>
                    <form enctype="multipart/form-data" method="POST" action="{{route('storeProduct')}}">
                        @csrf
                        <div class="row mb-3">
                            <label for="product_name" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" name="product_name" class="form-control" value="{{ old('product_name') }}"></div>
                            @error('product_name')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Nome Inválido</small>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-sm-2 col-form-label">Preço R$</label>
                            <div class="col-sm-10">
                                <input type="number" step="any" name="price" class="form-control" value="{{ old('price') }}"></div>
                                @error('price')
                                <small class="bg-danger text-white w-25 rounded" role="alert">Preço Inválido</small>
                                @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="stock" class="col-sm-2 col-form-label">Estoque</label>
                            <div class="col-sm-10">
                                <input type="number" name="stock" class="form-control" value="{{ old('stock') }}"></div>
                            @error('stock')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Estoque Inválido</small>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-sm-2 col-form-label">Enviar Foto</label>
                            <div class="col-sm-10"><input class="form-control" type="file" id="formFile" name="image">
                                @error('image')
                                <small class="bg-danger text-white w-25 rounded" role="alert">Imagem Inválida</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-sm-2 col-form-label">Descrição</label>
                            <div class="col-sm-10"><textarea name="description" class="form-control" style="height: 70px">{{ old('description') }}</textarea>
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
