<!DOCTYPE html>

<html lang="pt-br">

<head><link rel="shortcut icon" href="{{ asset('img/roda.ico')}}" type="image/x-icon" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap-datetimepicker.css')}}">


    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/basic.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/all.css')}}" />
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/smoothness/jquery-ui.css" type="text/css" media="all" />
    <style>
        .ui-timepicker-div .ui-widget-header {
            margin-bottom: 8px;
        }

        .ui-timepicker-div dl {
            text-align: left;
        }

        .ui-timepicker-div dl dt {
            height: 25px;
            margin-bottom: -25px;
        }

        .ui-timepicker-div dl dd {
            margin: 0 10px 10px 65px;
        }

        .ui-timepicker-div td {
            font-size: 90%;
        }

        .ui-tpicker-grid-label {
            background: none;
            border: none;
            margin: 0;
            padding: 0;
        }

        .ui-timepicker-rtl {
            direction: rtl;
        }

        .ui-timepicker-rtl dl {
            text-align: right;
        }

        .ui-timepicker-rtl dl dd {
            margin: 0 65px 10px 10px;
        }
    </style>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <title>Autobridge - Aluguel</title>



</head>

<body class="loaded">
    <div id="app" class="wrapper">
        <header class="header">
            <nav class="nav-main">
                <div class="container">
                    <div class="row header-holder">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <small>Menu</small>
                            </button>
                            <a class="navbar-brand"><img src="{{asset('/img/logo.png')}}" width="175" alt="Autobridge" title="Autobridge" class="img-responsive"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul data-nav-partner="false">
                            <li><a href="/" ><span>Home</span></a></li>
                                    <li><a href="#" ><span>Para Voce</span></a></li>
                                    <li><a href="#" ><span>Parcerias & Ofertas</span></a></li>
                                    <li><a href="#" ><span>Atendimento</span></a></li>
                                    <li><a href="/rentals" ><span>Minhas Reservas</span></a></li>
                                @if (Route::has('login')) @auth
                                <li class="link-submenu link-submenu-costumer logged-out hidden-xs" style="display: block !important">
                                    <span class="link-login"><a href="#" id="welcome">Bem-vindo
                                            {{Auth::user()->name}}</a></span> @if(Auth::user()->profile_id == 1)
                                    <span class="link-register">
                                        <a href="{{ url('/home') }}" id="access-personal-register-area">Dashboard</a>
                                    </span> @else
                                    <span class="link-register"><a href="/rentals"
                                            id="access-personal-register-area">Minhas Reservas</a></span> @endif
                                </li>
                                @else
                                <li class="link-submenu link-submenu-costumer logged-out hidden-xs" style="display: block !important">
                                    <span class="link-login"><a href="{{ route('login') }}"
                                            id="access-your-dashboard">Login</a></span> @if (Route::has('register'))
                                    <span class="link-register"><a href="{{ route('register') }}"
                                            id="access-personal-register-area">Cadastre-se</a></span> @endif
                                </li>
                                @endauth
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
            </nav>
        </header>
    </div>


    <main id="main-content">
        <section class="flow-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 flow-wrap__content">
                        <section class="section">
                            <div class="headline headline--register-reservation m-b-10">
                                <h1 class="headline-main--register-reservation">Confirme seus dados de reserva</h1>
                            </div>
                            <div class="divider clearfix hidden-xs-down"></div>
                            <div class="register-reservation">
                                <p>
                                    <form method='post' action="{{route('rentals.store') }}">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="control-group">
                                                <div class="well" style="margin-left: 20px; margin-top:20px; margin-bottom:-50px;">
                                                    <div >
                                                        <label>DATA DE RETORNO</label>
                                                            <div class="controls">
                                                                <input name="return_date" type="datetime-local" min="<?php echo $date ?>" class="span5">
                                                            </div>
                                                        </span>
                                                    </div>

                                                </div>
                                                <div class="divider clearfix hidden-xs-down"></div>



                                            </div>
                                            <div class="divider clearfix hidden-xs-down"></div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">

                                                        <h3>Características</h3>
                                                        <h4>{{$vehicle->manufacturer}} {{$vehicle->model}} - {{$vehicle->year}} </h4>
                                                        <br>
                                                        <p><b>{{$vehicle->color}}</b></p>
                                                        <p> {{$vehicle->description}}</p>

                                                    </div>
                                                    <div class="col-md-6" style="float:right;">
                                                        <img src="{{asset($vehicle->image)}}" alt="{{($vehicle->model)}}" width="300" />
                                                    </div>
                                                </div>
                                            </div>

                                            <input type="hidden" name="user_id" class="form-control" value="{{auth()->user()->id}}">
                                            <input type="hidden" name="vehicle_id" class="form-control" value="{{$vehicle->id}}">






                                </p>

                                </div>
                        </section>
                        </div>
                        <div id="sideBarMobile" class="col-12 col-lg-4 flow-wrap__sidebar">
                            <div class="detalhes-pedido detalhes-pedido-sidebar">
                                <div id="price-summary" class="section">
                                    <div class="calculate-wrap accordion-wrap">
                                        <h2>Informações</h2>
                                        <br>
                                        <div id="summary-booking" class="accordion">
                                            <div class="accordion__header">
                                                <h3 class="accordion__title">
                                                    Benefícios

                                            </div>
                                            <div class="accordion__content" style="display: none;">
                                                <ul class="summary-list">
                                                    <li>
                                                        Política de combustível: mesma quantidade

                                                    </li>
                                                    <li>
                                                        Inclui quilometragem ilimitada

                                                    </li>
                                                    <li>
                                                        Seguro CDW
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="accordion__hidden">
                                                <ul class="summary-list">
                                                    <li>
                                                        Política de combustível: mesma quantidade

                                                    </li>
                                                    <li>
                                                        Inclui quilometragem ilimitada

                                                    </li>
                                                    <li>
                                                        Seguro CDW
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="price-summary__total">
                                        <div class="discount">
                                            <h2>
                                                Cota diária
                                                <span class="with-discount"></span>
                                            </h2>
                                        </div>
                                        <div class="price-feature">
                                            <div class="price">
                                                <div class="price__total">
                                                    <span class="price__coin">R$</span>
                                                    <span class="price__ammount">{{$vehicle->value}},</span>
                                                    <span class="price__cents">00</span>
                                                </div>
                                                <div class="price__plots discount-div hidden-xl-down">
                                                    ou parcelado em: <b>6x <small>R$</small> <span
                                                        class="plots-html">00</span></b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sub-total-modal" class="row p-t-30 p-b-30 hidden-lg-up">
                        <div class="col-md-12">
                            <div class="price-summary__totalMobile">
                                <div class="discount">
                                    <h2 class="m-b-5">Valor total <span class="with-discount"></span></h2>
                                </div>
                                <div class="price-feature">
                                    <div class="price">
                                        <div class="price__total">
                                            <span class="price__coin">R$</span>
                                            <span class="price__ammount">79,</span>
                                            <span class="price__cents">37</span>
                                        </div>
                                        <div class="price__plots discount-div hidden-xl-down">
                                            ou parcelado em: <b>6x <small>R$</small> <span
                                                class="plots-html">18,78</span></b>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container">

                    <div class="row">
                        <div class="col-lg-8 flow-wrap__actions--start">
                            <button class="step-return button">
                            <a class="btn btn-danger" href="/"> Voltar</a>
                        </button>
                        </div>
                        <div class="col-lg-4 flow-wrap__actions--end" style="left: 0px;">
                            <button class="step-next step-4-next button">
                            <input type="submit" class="btn btn-success" value="Concluir">
                        </button>
                        </div>
                    </div>
                </div>
        </section>
    </main>

    <footer>
        <div class="footer__inner--copyright">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>Antes de efetivar a reserva, consulte no site os requisitos para alugar e conduzir veículos. Respeite os limites de velocidade.</p>
                        <p>Razão Social: AUTOBRIDGE LOCADORA DE VEÍCULOS LTDA | CNPJ 00.000.000/0000-00 | Avenida Afonso Pena 454, Campo Grande, MS , 00000-000<br><br> Serviço de Atendimento ao Cliente
                            <span class="link-phone phone-number" data-phone="0800 771 5158">0800 000 000</span>
                            <br>© Autobridge, todos os direitos reservados
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
  
    <script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker_002.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/index.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/respond.js')}}"></script>



</body>

</html>
