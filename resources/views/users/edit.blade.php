@extends('dashboard.app')
@section('title','Editar veículo | Autobridge')

@section('h1','Editar veículo')

@section('content')
    @include('dashboard.breadcrumb')

    <?php $rental = Auth::user()->rental_agency_id;?>
    <script type="application/javascript">
        function changes() {

            var index = document.getElementById("profile_id").value;

            if (index === "3") {

                document.getElementById("rental_agency_id").value = "1";
                document.getElementById("rental_agency_id").setAttribute("readonly", "true");

                document.getElementById("CNH").setAttribute("required", "true");

            } else if (index === "2") {

                document.getElementById("rental_agency_id").value = "<?php echo $rental;?>";
                document.getElementById("rental_agency_id").setAttribute("readonly", "true");

                document.getElementById("CNH").removeAttribute("required");

            } else if (index === "1") {

                document.getElementById("CNH").removeAttribute("required");
                document.getElementById("rental_agency_id").removeAttribute("readonly");

            }
        }

    </script>


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
            <div class="widget-title"><span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Informações de Veículos</h5>
            </div>
            <div class="widget-content nopadding">

                <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data"
                      class="form-horizontal">
                    @csrf
                    @method('PUT')


                    <div class="control-group">
                        <label class="control-label">Perfil:</label>
                        <div class="controls">
                            <select class="span5" id="profile_id" name="profile_id" onchange="changes()">
                                <option value="3" selected>Cliente</option>
                                <option value="2">Funcionário</option>
                                <option value="1">Administrador</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Agência:</label>
                        <div class="controls">
                            <input type="text" class="span5" placeholder="Agência" name="rental_agency_id" id="rental_agency_id" value="{{$user->rental_agency_id}}" value="" readonly/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Nome:</label>
                        <div class="controls">
                            <input type="text" class="span5" placeholder="Nome completo" name="name" id="name" value="{{$user->name}}" required/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Email:</label>
                        <div class="controls">
                            <input type="email" class="span5" placeholder="email@dominio.com.br" name="email" id="email" value="{{$user->email}}" required/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Senha:</label>
                        <div class="controls">
                            <input type="password" class="span5" placeholder="Senha" name="password" id="password" value="{{$user->password}}" required/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">CPF:</label>
                        <div class="controls">
                            <input type="text" class="span5" placeholder="CPF"
                                   pattern="[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}" maxlength="14" name="CPF" id="CPF" value="{{$user->CPF}}" required/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">CEP</label>
                        <div class="controls">
                            <input type="text" class="span5" placeholder="CEP" pattern="[0-9]{5}-?[0-9]{3}"
                                   maxlength="9" name="CEP" id="CEP" value="{{$user->CEP}}" required/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">CNH</label>
                        <div class="controls">
                            <input type="text" class="span5" placeholder="CNH" maxlength="11" name="CNH" id="CNH" value="{{$user->CNH}}" required/>
                        </div>

                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <input type="hidden" name="status_id" id="status" class="form-control" value="1">
                        </div>
                    </div>

                    <div class="form-actions text-left ">
                        <a class="btn btn-danger" href="{{ route('users.index') }}"> Voltar</a>
                        <button type="submit" class="btn btn-success">Editar</button>

                    </div>


                </form>
            </div>
        </div>
    </div>

    </div>


@endsection
