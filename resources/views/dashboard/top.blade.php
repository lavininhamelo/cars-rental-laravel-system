<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>@yield('title')</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{ asset('/css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{ asset('/css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{ asset('/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{ asset('/css/matrix-media.css')}}"  />
<link href="{{ asset('/font-awesome/css/font-awesome.css')}}"  rel="stylesheet" />
<link href="{{ asset('/font-awesome/css/fontawesome.css')}}"  rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('/css/jquery.gritter.css')}}"  />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

        <!--Header-part-->
        <div id="header">
          <h1><a href="#">testando123</a></h1>
        </div>
        <!--close-Header-part-->


        <!--top-Header-menu-->
        <div id="user-nav" class="navbar navbar-inverse">
          <ul class="nav">
            <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">{{Auth::user()->name}}</span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/profile"><i class="icon-user"></i>Meu Perfil</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                <li class="divider"></li>
                <li>
                  <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"> <i class="icon icon-share-alt"></i> <span class="text">Logout</span></i>
                  </a>
                </li>
              </ul>
            </li>
            <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
                <li class="divider"></li>
                <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
                <li class="divider"></li>
                <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
                <li class="divider"></li>
                <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
              </ul>
            </li>
            <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
            <li>
              <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                <i class="icon icon-share-alt"></i> <span class="text">Logout</span></i>
              </a>
            </li>



          </ul>
        </div>
        <!--close-top-Header-menu-->
        <!--start-top-serch-->
        <div id="search">
          <input type="text" placeholder="Pesquisar..."/>
          <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
        </div>
        <!--close-top-serch-->
        <!--sidebar-menu-->
        <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
          <ul>
            <li><a href="#"><i class="icon icon-home"></i>      <span>Dashboard</span></a> </li>
            <li><a href="/rentals"><i class="icon icon-signal"></i>   <span>Aluguéis</span></a> </li>
            @can('listVehicles', App\Vehicle::class)
              <li><a href="/vehicles"><i class="icon icon-road"></i><span>Veículos</span></a> </li>
            @endcan
            @can('listUsers', App\User::class)
              <li><a href="/users"><i class="icon icon-user"></i>        <span>Usuários</span></a></li>
            @endcan
            
            <!-- <li><a href="#"><i class="icon icon-cog"></i><span>Manutenção</span></a></li> -->
            <!-- <li><a href="#"><i class="icon icon-th"></i>    <span>Funcionários</span></a></li> -->
            
            <li><a href="/rentalagency"><i class="icon icon-th"></i>    <span>Agências</span></a></li>




          </ul>
        </div>
        <!--sidebar-menu-->
        <!-- Logout -->
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>

        <div id="content">







