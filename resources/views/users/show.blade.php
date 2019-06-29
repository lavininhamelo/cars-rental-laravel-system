@extends('dashboard.app')
@section('title','Informações de usuário| Autobridge')

@section('h1','Usuário')

@section('content')
    @include('dashboard.breadcrumb')

    <div class="row-fluid">
        <div class="span12">

                <div class="widget-box">
                    <div class="widget-title"><span class="icon"><i class="icon-th"></i></span>
                        <h5> {{$user->name}}</h5>
                        <span class="icon2"> <a class="btn btn-warning btn-mini" href="{{ route('users.edit',$user->id) }}"><i
                                        class="icon-pencil"></i></a> <a class="btn-danger btn btn-mini" href="#"
                                                                        data-toggle="modal" data-target="#delete-modal"><i
                                        class="icon-trash"></i></a>
              </span>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered">
                            @if($user->rental_agency_id != null)
                                <tr>
                                    <th scope="col">Agência</th>
                                    <td>{{$user->rental_agency_id}}</td>
                                </tr>
                            @endif
                            <tr>
                                <th scope="col">Perfil</th>
                                @if($user->profile_id == 1)
                                    <td>Administrador</td>
                                @elseif($user->profile_id == 2)
                                    <td>Funcionário</td>
                                @elseif($user->profile_id == 3)
                                    <td>Cliente</td>
                                @endif
                            </tr>
                            <tr>
                                <th scope="col">Email</th>
                                <td>{{$user->email}}</td>
                            </tr>

                            <tr>
                                <th scope="col">CPF</th>
                                <td>{{$user->CPF}}</td>
                            </tr>

                            <tr>
                                <th scope="col">CEP</th>
                                <td>{{$user->CEP}}</td>
                            </tr>
                            @if($user->CNH != null)
                                <th scope="col">CNH</th>
                                <td>{{$user->CNH}}</td>
                            @endif
                        </table>
                    </div>

                </div>
                <form action="{{ route('users.destroy', $user->id)}}" method="post">
                    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span
                                                aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="modalLabel">Excluir usuário</h4>
                                </div>
                                <div class="modal-body">Deseja realmente excluir este usuário?</div>
                                <div class="modal-footer">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Sim</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    </div>
    </div>





@endsection
