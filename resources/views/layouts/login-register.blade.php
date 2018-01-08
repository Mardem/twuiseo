<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>TWUISEO - Marketing Digital e Desenvolvimento Web | @yield('title', 'TW')</title>
  <link rel="stylesheet" href="{{ asset('resources/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/css/bootsnav.min.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/css/twuiseo.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/css/login.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('resources/css/fonts.min.css') }}">
  <link rel="stylesheet" href="{{ asset('ionicons/dist/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('resources/plugins/checkbox/skins/all.css?v=1.0.2') }}">
  <style>
    a {
      color: white;
    }
    .ion-ios-arrow-back {
      font-size: 15px;
    }
  </style>
</head>
<body>

<main>
  @yield('content')
</main>
<!-- Start Navigation -->
<nav class="navbar navbar-twuiseo navbar-fixed-bottom bootsnav" style="z-index: 11">

  <div class="container">

    <!-- Start Header Navigation -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand twuiseo-scroll" href="{{ url('/') }}">
        <svg style="margin-top: -10px"
             xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink"
             width="70" height="70">
          <image x="0px" y="0px" width="70" height="70"
                 xlink:href="data:img/png;base64,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"/>
        </svg>
      </a>
    </div>
    <!-- End Header Navigation -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-menu" style="font-family: Montserrat">
      <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
        <li class="active"><a class="twuiseo-scroll" href="{{ url('/') }}">Home</a></li>
        <li><a class="twuiseo-scroll" href="{{ url('/#services') }}">Serviços</a></li>
        <li><a class="twuiseo-scroll" href="{{ url('/#design') }}">Design</a></li>
        <li><a class="twuiseo-scroll" href="{{ url('/#news') }}">Novidades</a></li>
        @if (Route::has('login'))
          @auth
          <li><a href="{{ url('/home') }}"><b>Home</b></a></li>
        @else
          <li><a href="{{ route('register') }}"><b>Registrar</b></a></li>
          <li><a class="twuiseo-scroll" href="{{ route('login') }}"><i class="ion-md-person"></i> Login</a></li>
          @endauth
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
<!-- End Navigation -->

<div class="clearfix"></div>

<div class="pull" id="footer"></div>

<script src="{{ asset('resources/js/jquery.js') }}"></script>
<script src="{{ asset('resources/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('resources/js/bootsnav.js') }}"></script>
<script src="{{ asset('resources/js/scrolly.js') }}"></script>
<script src="{{ asset('resources/plugins/checkbox/icheck.js?v=1.0.2') }}"></script>

<script>
  $(document).ready(function () {
    $('input').iCheck({
      checkboxClass: 'iradio_square-purple',
      radioClass: 'iradio_square-purple'
    });
  });
</script>

</body>
</html>