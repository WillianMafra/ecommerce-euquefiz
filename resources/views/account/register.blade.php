@extends('layouts.layout')
@push('style')
    <link rel="stylesheet" href="{{asset('css/admin/dashboard/table.css')}}">
@endpush
<section class="text-center">
    <div class="p-5 bg-image" id="img-background"></div>
    <div class="card mx-4 mx-md-5 shadow-5-strong">
        <div class="card-body py-5 px-md-5" id="background-formulario">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-5">Cadastro</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" name="name" value="{{ old('name') }}" required/>
                                    <label class="form-label" for="form3Example1">Nome</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="email" id="form3Example2" class="form-control" name="email" value="{{old('email')}}" required/>
                                    <label class="form-label" for="form3Example2">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" name="endereco" value="{{old('endereco')}}" required/>
                                    <label class="form-label" for="form3Example1">Endereço</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example2" class="form-control" name="cidade" value="{{ old('cidade') }}"/>
                                    <label class="form-label" for="form3Example2">Cidade</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" name="cep" value="{{ old('cep') }}" required />
                                    <label class="form-label" for="form3Example1">CEP:</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="tel" id="form3Example2" class="form-control" name="telefone"  required/>
                                    <label class="form-label" for="form3Example2">Telefone</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="password" id="form3Example1" class="form-control" name="password" required/>
                                    <label class="form-label" for="form3Example1">Senha</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <input type="password" id="form3Example2" class="form-control" name="password_confirmation" required/>
                                    <label class="form-label" for="form3Example2">Confirmar Senha</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block mb-4">
                            Finalizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
