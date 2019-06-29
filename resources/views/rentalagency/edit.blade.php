@extends('dashboard.app')
@section('title','Editar agência | Autobridge')

@section('h1','Editar agência')

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


            
            <!-- <div class="widget-box">
              <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Informações da agência</h5>
              </div>
              <div class="widget-content nopadding">

                <form action="{{ route('rentalagency.update', $agency->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf

                  <div class="control-group">
                    <label class="control-label">Nome:</label>
                    <div class="controls">
                      <input type="text" class="span5" placeholder="Nome" name="name" value="{{$agency->name}}"  />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Cidade:</label>
                    <div class="controls">
                      <input type="text" class="span5" placeholder="Cidade" name="city" value="{{$agency->city}}"  />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Estado:</label>
                    <div class="controls">
                      <input type="text"  class="span5" placeholder="Estado" name="state" value="{{$agency->state}}" />
                    </div>
                  </div>
                     <div class="control-group">
                    <label class="control-label">País:</label>
                    <div class="controls">
                      <input type="text" class="span5" placeholder="País" name="country" value="{{$agency->country}}"/>
                    </div>
                    <div class="control-group">
                    <label class="control-label">Localização</label>
                    <div class="controls">
                      <input type="text" class="span5" placeholder="Localização" name="location" value="{{$agency->location}}"  />
                    </div>
                    <div class="control-group">
                    <label class="control-label">CNPJ</label>
                    <div class="controls">
                      <input type="text" class="span5" placeholder="CNPJ" name="CNPJ" value="{{$agency->CNPJ}}"  />
                    </div>
                    

                    <div class="form-actions text-left ">
                            <a class="btn btn-danger" href="{{ route('rentalagency.index') }}"> Voltar</a>
                            <button type="submit" class="btn btn-success">Editar</button>

                      </div>
                </form>
              </div>
            </div>
          </div>

        </div> -->


@endsection
