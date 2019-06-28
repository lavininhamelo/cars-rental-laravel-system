@extends('dashboard.app')
@section('title','Cadastrar agência| Autobridge')

@section('h1','Cadastrar agência')

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
            <h5>Informações da agência</h5>
        </div>
        <div class="widget-content nopadding">
            <form action="{{ route('rentalagency.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{csrf_field()}}

                <div class="control-group">
                    <label class="control-label">Nome:</label>
                    <div class="controls">
                        <input type="text" class="span5" placeholder="Nome" name="name" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Cidade:</label>
                    <div class="controls">
                        <input type="text" class="span5" placeholder="Cidade" name="city" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Estado:</label>
                    <div class="controls">
                        <input type="text" class="span5" placeholder="Estado" name="state" />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">País:</label>
                    <div class="controls">
                        <input type="text" class="span5" placeholder="País" name="country" />
                    </div>
                    <div class="control-group">
                        <label class="control-label">Localização:</label>
                        <div class="controls">
                            <input type="text" class="span5" placeholder="Localização" name="location" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">CPNJ:</label>
                        <div class="controls">
                            <input type="text" class="span5" placeholder="CNPJ" name="CNPJ" />
                        </div>
                    </div>


                    <div class="form-actions text-left ">
                        <a class="btn btn-danger" href="{{ route('rentalagency.index') }}"> Voltar</a>
                        <button type="submit" class="btn btn-success">Adicionar</button>

                    </div>





            </form>
        </div>
    </div>
</div>

</div>


@endsection