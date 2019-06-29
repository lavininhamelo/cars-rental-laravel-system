@extends('dashboard.app') @section('title','Alugueis realizados | Autobridge') @section('h1','Aluguéis realizados') @section('content') @include('dashboard.breadcrumb')
<div class="card-body">
  @if (session('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif
</div>
@if($rentals->count() > 0)
<div class="widget-box">
  <div class="widget-title"> 
    <span class="icon">
      <i class="icon-th"></i>
    </span>
    <h5>Aluguéis realizados</h5>
  </div>
  <div class="widget-content nopadding">
    <table class="table table-bordered table-hover table-condensed">
      <thead>
        <tr>
          <th scope="col">Foto</th>
          <th scope="col">Veículo</th>
          <th scope="col">Locadora</th>
          <th scope="col">Valor Total</th>
          <th scope="col">Status</th>
          <th scope="col">Data de devolução</th>
          <th scope="col">Criado em</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($rentals as $rental)
        <tr class="gradeX">
           <td class="align-middle"><img src="{{asset($rental->vehicle->image)}}" alt="{{($rental->vehicle->model)}}" width="90" /></td>
          <td class="align-middle">{{ $rental->vehicle->manufacturer}} - {{ $rental->vehicle->model}} - {{ $rental->vehicle->year}} - {{ $rental->vehicle->color}} - {{ $rental->vehicle->license_plate}}</td>
          <td class="align-middle">{{ $rental->vehicle->rental_agency->name}} - {{ $rental->vehicle->rental_agency->city}}</td>
          <td class="align-middle">R$ {{ $rental->value}},00</td>
          <td class="align-middle">{{ $rental->status}}</td>
          <td class="align-middle">{{ $rental->return_date}}</td>
          <td class="align-middle">{{ $rental->created_at}}</td>
          <!-- btn btn-success btn-xs <i class="icon-eye-open"></i>-->
          @can('alter_status', App\Rental::class)
            <td class="actions">  
              <form action="{{ route('rentals.update', $rental->id)}}" method="post">
                @method('PUT')
                @csrf
                  <select name="status">
                    <option value="">Selecione</option>
                    <option value="progress">Progresso</option>
                    <option value="fineshed">Encerrado</option>
                  </select>
                  <input type="submit" class="btn btn-success" value="Atualizar status">
              </form>
            </td>
          @endcan
          @can('alter_by_client', App\Rental::class)
            <td class="actions">  
              <form action="{{ route('rentals.update', $rental->id)}}" method="post">
                @method('PUT')
                @csrf
                 <a class="btn btn-primary btn-xs" href="#" data-toggle="modal" data-target="#delete-modal"><i class="icon-calendar"></i></a>

                <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="modalLabel">Qual a nova data de retorno?</h4>
                    </div>
                    <div class="modal-body">
                      <div class="control-group">
                        <label class="control-label">Data de retorno:</label>
                            <div class="controls">
                              <input name="return_date" type="datetime-local" min="<?php echo $date ?>" class="span5">
                            </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      <input type="submit" class="btn btn-success" value="Atualizar">

                    </div>
                  </div>
                </div>
              </div>
              </form>
            </td>
          @endcan
          
          
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
@else
  <h4>Ainda não possui aluguéis realizados</h4>
@endif

@endsection
