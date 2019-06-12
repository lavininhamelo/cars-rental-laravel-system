@extends('dashboard.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">AutoBridge</div>
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">Fabricante</th>
                          <th scope="col">Modelo</th>
                          <th scope="col">Ano</th>
                          <th scope="col">Preço</th>
                          <th scope="col">Locadora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                  </tbody>
                </table>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
