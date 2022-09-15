@extends('layouts.layout')
@push('style')
    <link rel="stylesheet" href="{{asset('css/profile/profile.css')}}">
@section('events')
<div style="border:solid 1px;width: 600px" class="container p-5 my-5 bg-white">
    <div class="row">
    <div class="d-flex justify-content-center">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="210px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            <span class="font-weight-bold">Nome</span>
            <span class="text-black-50">Telefone</span>
            <span class="text-black-50">Cidade</span>
            <span class="text-black-50">Endereço</span>
            <span class="text-black-50">CEP</span>
            <span class="text-black-50">E-mail</span>
            <span> </span></div>
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
                        <div class="col-md-12"><label class="labels">Telefone</label><input type="text" class="form-control" placeholder="digite seu novo número de telefone" value=""></div>
                        <div class="col-md-12"><label class="labels">Cidade</label><input type="text" class="form-control" placeholder="digite sua nova cidade" value=""></div>
                        <div class="col-md-12"><label class="labels">Endereço</label><input type="text" class="form-control" placeholder="digite seu novo endereço" value=""></div>
                        <div class="col-md-12"><label class="labels">CEP</label><input type="text" class="form-control" placeholder="digite seu novo CEP" value=""></div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder=" digite seu novo e-mail" value=""></div>
                    </div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Editar perfil</button></div>
            </div>
        </div>
    </div>
</div>
</div>
</div
@endsection
@endpush
@prepend('scripts')
<script src="{{asset('js/app.js')}}"></script>
@endprepend