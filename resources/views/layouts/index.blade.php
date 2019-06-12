@extends('dashboard.app')
@section('title','Dashbord | Autobridge')
@section('content')

<div id="content-header">
        <div id="breadcrumb">
          <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        </div>
</div>


<div class="container-fluid">
        @include('dashboard.boxes')
        @include('dashboard.chart')
@endsection

