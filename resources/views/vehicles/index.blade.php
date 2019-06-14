@extends('dashboard.app') @section('title','Veículos cadastrados | Autobridge') @section('h1','Veículos cadastrados') @section('content') @include('dashboard.breadcrumb')
<div class="card-body">
  @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif
</div>

<div class="pull-right">
  @can('create', App\Vehicle::class)
    <a class="btn btn-success" style="margin-bottom:10px;" href="{{ route('vehicles.create') }}"> Adicionar novo Veículo</a> 
  @endcan
</div>

@if($vehicles->count() > 0)
<div class="widget-box">
  <div class="widget-title"> 
    <span class="icon">
      <i class="icon-th"></i>
    </span>
    <h5>Lista de Veículos</h5>
  </div>
  <div class="widget-content nopadding">
    <table class="table table-bordered table-hover table-condensed">
      <thead>
        <tr>
          <th scope="col">Imagem</th>
          <th scope="col">Fabricante</th>
          <th scope="col">Modelo</th>
          <th scope="col">Ano</th>
          <th scope="col">Placa</th>
          <th scope="col">Chassi</th>
          <th scope="col">Cor</th>
          <th scope="col">Diária</th>
          <th scope="col">Locadora</th>
          <th scope="col">Descrição</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($vehicles as $vehicle)
        <tr class="gradeX">
          <td class="align-middle"><img src="{{asset($vehicle->image)}}" alt="{{($vehicle->model)}}" width="90" /></td>
          <td class="align-middle">{{ $vehicle->manufacturer}}</td>
          <td class="align-middle">{{ $vehicle->model}}</td>
          <td class="align-middle">{{ $vehicle->year}}</td>
          <td class="align-middle">{{ $vehicle->license_plate}}</td>
          <td class="align-middle">{{ $vehicle->chassi}}</td>
          <td class="align-middle">{{ $vehicle->color}}</td>
          <td class="align-middle">R$ {{ $vehicle->value}},00</td>
          <td class="align-middle">{{ $vehicle->rental_agency->name}}</td>
          <td class="align-middle">{{ $vehicle->description}}</td>
          <td class="actions">
            <a class="btn btn-success btn-xs" href="{{ route('vehicles.show',$vehicle->id) }}"><i class="icon-eye-open"></i> </a>
            <a class="btn btn-warning btn-xs" href="{{ route('vehicles.edit',$vehicle->id) }}"><i class="icon-edit"></i></a>
            <a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal"><i class="icon-trash"></i></a>
          </td>
        </tr>
        <form action="{{ route('vehicles.destroy', $vehicle->id)}}" method="post">
          <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="modalLabel">Excluir Veículo</h4>
                </div>
                <div class="modal-body">Deseja realmente excluir este veículo? </div>
                <div class="modal-footer">
                  @csrf @method('DELETE')
                  <button type="submit" class="btn btn-primary">Sim</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@else
  <h4>Ainda não possui veículos cadastrados</h4>
@endif

{{$vehicles->links()}}
@endsection
