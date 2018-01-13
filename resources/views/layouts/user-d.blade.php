<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>TWUISEO - Marketing Digital e Desenvolvimento Web | Área do Usuário</title>
  <link rel="stylesheet" href="{{ asset('resources/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/css/bootsnav.min.css') }}">
  <link rel="stylesheet" href="{{ asset('ionicons/dist/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/css/fonts.min.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/css/areas/usuario2.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/css/areas/user.min.css') }}">
  <!-- Plugins -->
  <link rel="stylesheet" href="{{ asset('resources/plugins/leader/leader-line.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/plugins/jquery-elevator/jquery.elevator.min.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/plugins/jquery-sweet-modal/jquery.sweet-modal.min.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/plugins/calendar/css/pignose.calendar.min.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/plugins/checkbox/skins/all.css?v=1.0.2') }}">
  <link rel="stylesheet" href="{{ asset('resources/plugins/modal/jquery.sweet-modal.min.css') }}">


  <style>
    .pignose-calendar{width:100%;max-width:655px;max-height:480px}.pignose-calendar .pignose-calendar-top{background:#905aca;color:white}.pignose-calendar .pignose-calendar-top .pignose-calendar-top-nav .pignose-calendar-top-icon{color:white}.pignose-calendar .pignose-calendar-top .pignose-calendar-top-nav .pignose-calendar-top-icon{color:white}.pignose-calendar .pignose-calendar-top .pignose-calendar-top-year{color:white}.jqstooltip{width:80px;height:35px}


    .panel-twuiseo .panel-heading {
      background: #fff;
    box-shadow: 1px 0 20px rgba(0,0,0,0.08);
    }
    .panel-twuiseo .panel-footer{
      background: #f7f7f7;
    border: 0;
    }
    .btn-tw-reply {
      background: forestgreen;
    color: white;
    }
    .btn-tw-reply:hover, .btn-tw-reply:focus {
    color: white;
    background: #2cb82c;
}

    @yield('styles')
  </style>
</head>
<body>


<main>
  <!-- Start Navigation -->
  <nav class="navbar navbar-inverse bootsnav">

    <div class="container">
      <!-- Start Header Navigation -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('resources/images/brand/brand1.png') }}" class="logo" alt=""></a>
      </div>
      <!-- End Header Navigation -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
          <li class="active"><a href="{{ url('/') }}"><i class="ion-ios-arrow-back-outline"></i> Voltar</a></li>
          <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="ion-ios-log-out"></i> Sair
              </a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
  </form>
  <!-- End Navigation -->

  <div class="clearfix"></div>
  <br>

  @yield('content')

</main>

<footer>
  © TWUISEO Marketing Digital e Desenvolvimento Web - 2017
</footer>

<script src="{{ asset('resources/js/jquery.js') }}"></script>
<script src="{{ asset('resources/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('resources/js/bootsnav.js') }}"></script>
<script src="{{ asset('resources/js/scrolly.js') }}"></script>
<!-- Plugins -->
<script src="{{ asset('resources/plugins/leader/leader-line.min.js') }}"></script>
<script src="{{ asset('resources/plugins/jquery.typewriter.js') }}"></script>
<script src="{{ asset('resources/plugins/jquery.breadcrumbs-generator.min.js') }}"></script>
<script src="{{ asset('resources/plugins/jquery-elevator/jquery.elevator.min.js') }}"></script>
<script src="{{ asset('resources/plugins/jquery-sweet-modal/jquery.sweet-modal.min.js') }}"></script>
<script src="{{ asset('resources/plugins/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('resources/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('resources/plugins/jquery-sparkline/jquery.charts-sparkline.min.js') }}"></script>
<script src="{{ asset('resources/plugins/chartist-js/dist/chartist.min.js') }}"></script>
<script src="{{ asset('resources/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('resources/plugins/calendar/js/pignose.calendar.full.min.js') }}"></script>
<script src="{{ asset('resources/plugins/postit/jquery.postitall.js') }}"></script>
<script src="{{ asset('resources/js/script.min.js') }}"></script>
<script src="{{ asset('resources/plugins/checkbox/icheck.js?v=1.0.2') }}"></script>
<script src="{{ asset('resources/plugins/modal/jquery.sweet-modal.min.js') }}"></script>

@yield('scripts')

<script>
  $(document).ready(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_minimal',
      radioClass: 'iradio_square-purple',
    });
  });
</script>

</body>
</html>