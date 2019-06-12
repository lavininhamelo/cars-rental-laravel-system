@extends('dashboard.app')
@section('title','Cadastrar veículo | Autobridge')

@section('h1','Cadastrar veículo')

@section('content')
@include('dashboard.breadcrumb')




          <div class="span12">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Informações de Veículos</h5>
              </div>
              <div class="widget-content nopadding">
                <form action="{{ route('vehicles.store') }}" method="post" class="form-horizontal">
                {{csrf_field()}}

                    <div class="control-group">
                        <label class="control-label">Fabricante:</label>
                        <div class="controls">
                          <select class="span5" name="manufacturer">
                              <option value="Audi">Audi</option>
                              <option value="BMW">BMW</option>
                              <option value="Chevrolet">Chevrolet</option>
                              <option value="Ferrari">Ferrari</option>
                              <option value="Fiat">Fiat</option>
                              <option value="Ford">Ford </option>
                              <option value="Honda">Honda</option>
                              <option value="Hyundai">Hyundai</option>
                              <option value="Lamborghini">Lamborghini</option>
                              <option value="Land Rover">Land Rover</option>
                              <option value="Lexus">Lexus</option>
                              <option value="Mercedes-Benz">Mercedes-Benz</option>
                              <option value="Nissan">Nissan</option>
                              <option value="Peugeot">Peugeot</option>
                              <option value="Renault">Renault</option>
                              <option value="Toyota" >Toyota</option>
                              <option value="Volkswagen" >Volkswagen</option>

                          </select>
                        </div>
                      </div>
                  <div class="control-group">
                    <label class="control-label">Modelo:</label>
                    <div class="controls">
                      <input type="text" class="span5" placeholder="Modelo" name="model"  />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Ano:</label>
                    <div class="controls">
                      <input type="number" placeholder="Ano" name="year" class="span5" min="1900" max="2099" step="1" value="2016" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Chassi:</label>
                    <div class="controls">
                      <input type="text"  class="span5" placeholder="Chassi" name="chassi"  />
                    </div>
                  </div>
                 <!--  <div class="control-group">
                    <label class="control-label">Placa:</label>
                    <div class="controls">
                      <input type="text" class="span5" placeholder="Placa" name="license_plate" />
                    </div> -->
                    <div class="controls">
                        <input type="hidden" name="rental_agency_id" class="form-control" value="{{isset(auth()->user()->rental_agency_id) ? auth()->user()->rental_agency_id : null}}">
                        <input type="hidden" name="status_id" class="form-control" value="1">
                    </div>





                    <div class="form-actions text-left ">
                            <a class="btn btn-danger" href="{{ route('vehicles.index') }}"> Voltar</a>
                            <button type="submit" class="btn btn-success">Adicionar</button>

                      </div>





                </form>
              </div>
            </div>
          </div>

        </div>


@endsection
