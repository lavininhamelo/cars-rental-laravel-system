<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>@yield('titulo')</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}"" />
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
          <h1><a href="dashboard.html">Autobridge Admin</a></h1>
        </div>
        <!--close-Header-part-->


        <!--top-Header-menu-->
        <div id="user-nav" class="navbar navbar-inverse">
          <ul class="nav">
            <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
                <li class="divider"></li>
                <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
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
            <li class=""><a title="" href="#"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
          </ul>
        </div>
        <!--close-top-Header-menu-->
        <!--start-top-serch-->
        <div id="search">
          <input type="text" placeholder="Search here..."/>
          <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
        </div>
        <!--close-top-serch-->
        <!--sidebar-menu-->
        <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
          <ul>
            <li class="active"><a href="#"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
            <li> <a href="#"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
            <li> <a href="#"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
            <li><a href="#"><i class="icon icon-th"></i> <span>Tables</span></a></li>
            <li><a href="#"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
            <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
              <ul>
                <li><a href="#">Basic Form</a></li>
                <li><a href="#">Form with Validation</a></li>
                <li><a href="#">Form with Wizard</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
            <li><a href="#"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
            <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
              <ul>
                <li><a href="#">Dashboard2</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Calendar</a></li>
                <li><a href="#">Invoice</a></li>
                <li><a href="#">Chat option</a></li>
              </ul>
            </li>
            <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
              <ul>
                <li><a href="#">Error 403</a></li>
                <li><a href="#">Error 404</a></li>
                <li><a href="#">Error 405</a></li>
                <li><a href="#">Error 500</a></li>
              </ul>
            </li>
            <li class="content"> <span>Monthly Bandwidth Transfer</span>
              <div class="progress progress-mini progress-danger active progress-striped">
                <div style="width: 77%;" class="bar"></div>
              </div>
              <span class="percent">77%</span>
              <div class="stat">21419.94 / 14000 MB</div>
            </li>
            <li class="content"> <span>Disk Space Usage</span>
              <div class="progress progress-mini active progress-striped">
                <div style="width: 87%;" class="bar"></div>
              </div>
              <span class="percent">87%</span>
              <div class="stat">604.44 / 4000 MB</div>
            </li>
          </ul>
        </div>
        <!--sidebar-menu-->

        <div id="content">
                <!--breadcrumbs-->
                  <div id="content-header">
                    <div id="breadcrumb"> <a href="i#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
                  </div>
                <!--End-breadcrumbs-->
        <div class="container-fluid">




