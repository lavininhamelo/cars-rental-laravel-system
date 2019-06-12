@extends('dashboard.app')
@section('title','Veículos cadastrados | Autobridge')

@section('h1','Veículos cadastrados')

@section('content')
@include('dashboard.breadcrumb')

<div class="pull-right">
    @can('create', App\Vehicle::class)
      <a class="btn btn-success" style="margin-bottom:10px;"href="{{ route('vehicles.create') }}">  Create New Vehicle</a>
    @endcan

    </div>

            <div class="widget-box">
              <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Lista de Veículos</h5>
              </div>
              <div class="widget-content nopadding">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th scope="col">Fabricante</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Ano</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Chassi</th>
                        <th scope="col">Placa</th>
                        <th scope="col">Locadora</th>


                    </tr>
                  </thead>
                  <tbody>
                        @foreach ($vehicles as $vehicle)
                        <tr class="gradeX">
                            <td>{{ $vehicle->manufacturer}}</td>
                            <td>{{ $vehicle->model}}</td>
                            <td>{{ $vehicle->year}}</td>
                            <td>69,99/D</td>
                            <td>{{ $vehicle->chassi}}</td>
                            <td>ARH-2323</td>
                            <td>{{ $vehicle->rental_agency_id}}</td>
                        </tr>

                    @endforeach
                  </tbody>
                </table>





              </div>


            </div>
            {{$vehicles->links()}}
          </div>
        </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>




@endsection
