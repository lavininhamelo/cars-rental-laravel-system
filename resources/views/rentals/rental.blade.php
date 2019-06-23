@extends('dashboard.app')
@section('title','Template de Base | Autobridge')

@section('h1','Template de Base')

@section('content')
@include('dashboard.breadcrumb')

<p>
<form method='post' action="{{route('rentals.store') }}">
	{{csrf_field()}}
	<h4>Confirmar veículo</h4>	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p>{{$vehicle->manufacturer}} - {{$vehicle->model}} - {{$vehicle->year}} </p>
			    <h3>Características:</h3>
			    <p>- {{$vehicle->color}}</p>
			    <p>- {{$vehicle->description}}</p>
			    
			</div>
			<div class="col-md-6" style="float:right;">
				<img src="{{asset($vehicle->image)}}" alt="{{($vehicle->model)}}" width="300" />
			</div>
		</div>
	</div>

	<input type="hidden" name="user_id" class="form-control" value="{{auth()->user()->id}}">
    <input type="hidden" name="vehicle_id" class="form-control" value="1">
    
	<div class="control-group">
		<label class="control-label">Data de retorno:</label>
        <div class="controls">
        	<input name="return_date" type="datetime-local" class="span5">
        </div>
    </div>
    
	<input type="submit" class="btn btn-success" value="Enviar">
</form>

</p>


@endsection
