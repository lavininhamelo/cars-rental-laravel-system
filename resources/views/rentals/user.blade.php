
<!DOCTYPE html>

<html lang="pt-br">

<head><link rel="shortcut icon" href="{{ asset('img/roda.ico')}}" type="image/x-icon" />

<link rel="shortcut icon" href="{{ asset('img/roda.ico')}}" type="image/x-icon" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="">
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/basic.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/all.css')}}" />
    <link href="{{ asset('/font-awesome/css/font-awesome.css')}}"  rel="stylesheet" />
<link href="{{ asset('/font-awesome/css/fontawesome.css')}}"  rel="stylesheet" />
<!-- Remember to include jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />


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
                                    @if (Route::has('login'))
                                    @auth
                                <li class="link-submenu link-submenu-costumer logged-out hidden-xs" style="display: block !important">
                                    <span class="link-login"><a href="#" id="welcome">Bem-vindo
                                            {{Auth::user()->name}}</a></span> @if(Auth::user()->profile_id == 1)
                                    <span class="link-register">
                                        <a href="{{ url('/home') }}" id="access-personal-register-area">Dashboard</a>
                                    </span> @else
                                    <span class="link-register"><a href="/perfil" id="access-personal-register-area">Meu
                                            perfil</a></span> @endif
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
        <div id="partial-groups">
            <div class="bg-blue-gradient--internal">
                <div class="bg-blue-gradient__inner">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h1 class="main-headline headline--my-reservations">
                                    <span>Minhas reservas</span>
                                    <small class="headline--subtitle">Aqui você pode encontrar algumas opções
                                        disponiveis para você...</small>
                                </h1>
                            </div>
                        </div>
                        <div class="row">
                           {{--  oi  --}}

  <div class="widget-content nopadding">
    <table class="table table-bordered table-hover table-condensed" style="margin-top:-50px;margin-bottom:150px">
      <thead>
        <tr>
          <th scope="col">Foto</th>
          <th scope="col">Veículo</th>
          <th scope="col">Locadora</th>
          <th scope="col">Valor Total</th>
          <th scope="col">Status</th>
          <th scope="col">Data de devolução</th>
          <th scope="col">Criado em</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($rentals as $rental)
        <tr class="gradeX">
           <td class="align-middle"><img src="{{asset($rental->vehicle->image)}}" alt="{{($rental->vehicle->model)}}" width="90" /></td>
          <td class="align-middle">{{ $rental->vehicle->manufacturer}} - {{ $rental->vehicle->model}} - {{ $rental->vehicle->year}} - {{ $rental->vehicle->color}} - {{ $rental->vehicle->license_plate}}</td>
          <td class="align-middle">{{ $rental->vehicle->rental_agency->name}} - {{ $rental->vehicle->rental_agency->city}}</td>
          <td class="align-middle">R$ {{ $rental->value}},00</td>
          <td class="align-middle">{{ $rental->status}}</td>
          <td class="align-middle">{{ $rental->return_date}}</td>
          <td class="align-middle">{{ $rental->created_at}}</td>
          <!-- btn btn-success btn-xs <i class="icon-eye-open"></i>-->
          @can('alter_status', App\Rental::class)
            @if ($rental->status != 'fineshed')
            <td class="actions">
              <form action="{{ route('rentals.update', $rental->id)}}" method="post">
                @method('PUT')
                @csrf
                  <select name="status">
                    <option value="">Selecione</option>
                    <option value="progress">Progresso</option>
                    <option value="fineshed">Encerrado</option>
                  </select>
                  <input type="submit" class="btn btn-success" value="Atualizar status">
              </form>
            </td>
            @endif
          @endcan
          @can('alter_by_client', App\Rental::class)
          @if ($rental->status != 'fineshed')
            <td class="actions"><p><a href="#ex1" rel="modal:open"><img src="{{asset('img/calendar.png')}}" width="50"></a></p>
             <div id="ex1" class="modal">
  <form action="{{ route('rentals.update', $rental->id)}}" method="post">
                @method('PUT')
                @csrf



                    <div class="modal-header">
                      <h4 class="modal-title" id="modalLabel">Qual a nova data de retorno?</h4>
                    </div>
                    <div class="modal-body">
                      <div class="control-group">
                        <label class="control-label">Data de retorno:</label>
                            <div class="controls">
                            <input name="return_date" type="datetime-local" value="2019-06-29T10:26"min="<?php echo $date ?>" class="span5">
                            </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="#" rel="modal:close">Cancelar</a>
                      <b><input style="color:#008000"type="submit" class="btn btn-success" value="Atualizar"></b>

                    </div>

              </form>

</div>
            </td>
            @endif
          @endcan


        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
                           {{--  tchau  --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

</body>

</html>
