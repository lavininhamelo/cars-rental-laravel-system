@extends('layouts.app')
@section('titulo','Dashbord | Autobridge')
@section('conteudo')

<div id="content-header">
        <div id="breadcrumb">
          <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        </div>
</div>


<div class="container-fluid">
        @include('layouts.boxes')
        @include('layouts.chart')
@endsection

