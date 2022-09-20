@extends('admin.management.adminHeader')
@include('admin.management.subview.navbar')
<section id="products">
    <div class="col-xs-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                @if(!empty($message))
                    <div class="text-white alert alert-success bg-success text-center">{{$message}}</div>
                @endif
                <h5 class="card-title text-center">Lista de Usuarios</h5>
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
                                    <img src="{{asset($user->image)}}" alt="imagem-de-perfil">
                                @else <p class="text-danger">Imagem Indisponível</p>
                                @endif
                            </td>

                            <td >{{ $user->name }}</td>
                            <form method="POST" action="">
                                @method('put')
                                @csrf
                                <td>
                                        <button
                                            type="submit" name="userPromotion"
                                            formaction="{{route('userPromotion', $user->id)}}"
                                            class="border-0">
                                            <img src="{{asset('img/icone/arrow-up.png')}}" width="20px" alt="promover usuario"  onsubmit="return confirm('Deseja Rebaixar a Usuário {{addslashes($user->name)}}?')">
                                        </button>
                                </td>

                                <td>
                                        <button
                                            type="submit" name="userDemoted"
                                            formaction="{{route('userDemoted', $user->id)}}"
                                            class="border-0">
                                            <img src="{{asset('img/icone/arrow-down.png')}}" width="20px" alt="rebaixar-usuario"  onsubmit="return confirm('Deseja Rebaixar a Usuário {{addslashes($user->name)}}?')">
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
