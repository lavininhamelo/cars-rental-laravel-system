@extends('layouts.app')
@section('titulo','Veículos cadastrados | Autobridge')

@section('h1','Veículos cadastrados')

@section('conteudo')
@include('layouts.breadcrumb')





<div class="pull-right">
        <a class="btn btn-success" style="margin-bottom:10px;"href="{{ route('vehicles.create') }}"> Create New Vehicle</a>
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
                    <tr class="gradeX">
                     <td>Audi</td>
                     <td>R8</td>
                     <td>2018</td>
                     <td>200/H</td>
                     <td>12121212121</td>
                     <td>ARH-2323</td>
                     <td>1</td>
                    </tr>
                    <tr class="gradeX">
                        <td>Ford</td>
                        <td>Fiesta</td>
                        <td>2018</td>
                        <td>200/H</td>
                        <td>13131313131</td>
                        <td>ARH-2323</td>
                        <td>1</td>
                    </tr>


                  </tbody>
                </table>
              </div>
            </div>
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
