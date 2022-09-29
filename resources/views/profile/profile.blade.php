@extends('layouts.layout')
@push('scripts')
    <script src="{{asset('js/profile.js')}}"></script>
@endpush
@push('style')
    <link rel="stylesheet" href="{{asset('css/profile/profile.css')}}">
@endpush
@section('events')
<<<<<<< HEAD
    <section>
        <div style="border:solid 1px;" class="container p-5 my-5 bg-white w-75">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-md-10 border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <h4 class="text-right">Configuração de Perfil</h4>
                            </div>
                            @if(!empty($message))
                                <div class="text-white alert alert-success bg-success text-center">{{$message}}</div>
                            @endif
                            <form action="{{route('saveProfile')}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="d-flex justify-content-center ">

                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <label class="labels">Nome</label>
                                            <input type="text" required name="name" class="form-control" placeholder="Nome completo" value="{{$user->name}}">
                                        </div>

                                        @error('name')
                                        <small class="bg-danger text-white w-50 rounded" role="alert">Nome Inválido</small>
                                        @enderror

                                        <div class="col-md-12">
                                            <label class="labels">CPF</label>
                                            <input type="text" required name="cpf" class="form-control" placeholder="Nome completo" value="{{$user->cpf}}">
                                        </div>

                                        @error('cpf')
                                        <small class="bg-danger text-white w-50 rounded" role="alert">CPF Inválido</small>
                                        @enderror

                                        <div class="col-md-12">
                                            <label class="labels">Telefone</label>
                                            <input type="tel" required name="telefone" class="form-control" placeholder="digite seu novo número de telefone" value="{{$user->telefone}}">
                                        </div>

                                        @error('telefone')
                                        <small class="bg-danger text-white w-50 rounded" role="alert">Telefone Inválido</small>
                                        @enderror

                                        <div class="col-md-12">
                                            <label class="labels">Cidade</label>
                                            <input type="text" required name="cidade" class="form-control" placeholder="digite sua nova cidade" value="{{$user->cidade}}">
                                        </div>

                                        @error('cidade')
                                        <small class="bg-danger text-white w-50 rounded" role="alert">Cidade Inválida</small>
                                        @enderror

                                        <div class="col-md-12">
                                            <label class="labels">Endereço</label>
                                            <input type="text" required name="endereco" class="form-control" placeholder="digite seu novo endereço" value="{{$user->endereco}}">
                                        </div>

                                        @error('endereco')
                                        <small class="bg-danger text-white w-50 rounded" role="alert">Endereco Inválido</small>
                                        @enderror

                                        <div class="col-md-12">
                                            <label class="labels">Data de Nascimento</label>
                                            <input type="date" required name="nascimento" class="form-control" placeholder="Digite Sua Data de Nascimento" value="{{$user->nascimento}}">
                                        </div>

                                        @error('nascimento')
                                        <small class="bg-danger text-white w-50 rounded" role="alert">Data de Nascimento Inválida</small>
                                        @enderror

                                        <div class="col-md-12">
                                            <label class="labels">CEP</label>
                                            <input type="text" required name="cep" class="form-control" placeholder="digite seu novo CEP" value="{{$user->cep}}">
                                        </div>

                                        @error('cep')
                                        <small class="bg-danger text-white w-50 rounded" role="alert">CEP Inválido</small>
                                        @enderror

                                        <div class="col-md-12">
                                            <label class="labels">Nova senha</label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>

                                        @error('cep')
                                        <small class="bg-danger text-white w-50 rounded" role="alert">Senha Inválida</small>
                                        @enderror

                                        <div class="col-md-12">
                                            <label class="labels">Confirmar senha</label>
                                            <input type="password" class="form-control" name="password_confirmation" required>
                                        </div>

                                        @error('password_confirmation')
                                        <small class="bg-danger text-white w-50 rounded" role="alert">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mt-5 text-center">
                                    <button class="btn btn-primary profile-button" type="submit">Editar perfil</button>
                                </div>
                            </form>
                        </div>
=======
<div style="border:solid 1px;width: 600px" class="container p-5 my-5 bg-white">
    <div class="row">
    <div class="d-flex justify-content-center">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center rounded-circle mt-5">
                    <label class="picture" for="picture__input" tabIndex="0">
                        <input type="file" name="picture__input" id="picture__input">
                        <span class="picture__image"></span>
                    </label>
            </div>
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <span class="font-weight-bold">Nome</span>
                <span class="text-black-50">Telefone</span>
                <span class="text-black-50">Cidade</span>
                <span class="text-black-50">Endereço</span>
                <span class="text-black-50">CEP</span>
                <span class="text-black-50">E-mail</span>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <div class="col-md-10 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-center align-items-center mb-3">
                    <h4 class="text-right">Configuração de Perfil</h4>
                </div>
                <div class="d-flex justify-content-center ">
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Nome</label><input type="text" class="form-control" placeholder="Nome completo" value=""></div>
                        <div class="col-md-12"><label class="labels">Telefone</label><input type="text" class="form-control" placeholder="Digite seu novo número de telefone" value=""></div>
                        <div class="col-md-12"><label class="labels">Cidade</label><input type="text" class="form-control" placeholder="Digite sua nova cidade" value=""></div>
                        <div class="col-md-12"><label class="labels">Endereço</label><input type="text" class="form-control" placeholder="Digite seu novo endereço" value=""></div>
                        <div class="col-md-12"><label class="labels">CEP</label><input type="text" class="form-control" placeholder="Digite seu novo CEP" value=""></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder=" Digite seu novo e-mail" value=""></div>
                        <div class="col-md-12"><label class="labels">Nova senha</label><input type="password" class="form-control" name="password" required></div>
                        <div class="col-md-12"><label class="labels">Confirmar senha</label><input type="password" class="form-control" name="password_confirmation" required></div>
>>>>>>> 832b1ac8e713b1a181a769bf04c332fc996fd642
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
