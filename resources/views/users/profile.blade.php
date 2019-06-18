@extends('dashboard.app')
@section('title','Meu Perfil| Autobridge')

@section('h1','Meu Perfil')

@section('content')
    @include('dashboard.breadcrumb')

    <div class="widget-box">
        <div class="widget-title"><!--<span class="icon"><i class="icon-th"></i></span>-->
            <h5> {{Auth::user()->name}}</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered">
                @if(Auth::user()->rental_agency_id != null)
                    <tr>
                        <th scope="col">Agência</th>
                        <td>{{Auth::user()->rental_agency_id}}</td>
                    </tr>
                @endif
                <tr>
                    <th scope="col">Perfil</th>
                    @if(Auth::user()->profile_id == 1)
                        <td>Administrador</td>
                    @elseif(Auth::user()->profile_id == 2)
                        <td>Funcionário</td>
                    @elseif(Auth::user()->profile_id == 3)
                        <td>Cliente</td>
                    @endif
                </tr>
                <tr>
                    <th scope="col">Email</th>
                    <td>{{Auth::user()->email}}</td>
                </tr>

                <tr>
                    <th scope="col">CPF</th>
                    <td>{{Auth::user()->CPF}}</td>
                </tr>

                <tr>
                    <th scope="col">CEP</th>
                    <td>{{Auth::user()->CEP}}</td>
                </tr>
                @if(Auth::user()->CNH != null)
                    <th scope="col">CNH</th>
                    <td>{{Auth::user()->CNH}}</td>
                @endif
            </table>
        </div>

    </div>


@endsection
