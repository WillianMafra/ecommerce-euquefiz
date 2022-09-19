@extends('admin.management.adminHeader')
@include('admin.management.subview.navbar')
<section id="products">
    <div class="col-xs-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                @if(!empty($message))
                    <div class="text-white alert alert-success bg-success text-center">{{$message}}</div>
                @endif
                <h5 class="card-title text-center">Lista de Categorias</h5>
                <table class="table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th scope="col">Imagem</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Promover</th>
                        <th scope="col">Rebaixar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td> @if (!empty($user->image))
                                    {{$user->image}}
                                @else <p class="text-danger">Imagem Indisponível</p>
                                @endif
                            </td>

                            <td >{{ $user->name }}</td>
                            <form method="POST" action="">
                                @method('put')
                                @csrf
                                <td>
                                    <a href="{{route('userDemoted', $user->id)}}"> onsubmit="return confirm('Deseja Rebaixar a Usuário {{addslashes($user->name)}}?')">
                                    <button type="submit" class="border-0"><img src="{{asset('storage/img/icone/arrow-up.png')}}" width="20px" alt="apagar item">
                                    </button>
                                    </a>
                                </td>

                            <td>
                                <a href="{{route('userDemoted', $user->id)}}"> onsubmit="return confirm('Deseja Rebaixar a Usuário {{addslashes($user->name)}}?')">
                                <button type="submit" class="border-0"><img src="{{asset('storage/img/icone/arrow-down.png')}}" width="20px" alt="apagar item">
                                </button>
                                </a>
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
