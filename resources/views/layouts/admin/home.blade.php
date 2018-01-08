<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>TWUISEO - Marketing Digital e Desenvolvimento Web | Administração</title>
    <link rel="stylesheet" href="{{ asset('resources/css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/bootsnav.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/twuiseo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/css/areas/admin.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('ionicons/dist/css/ionicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('resources/css/fonts.min.css') }}" rel="stylesheet">
    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('resources/plugins/leader/leader-line.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/plugins/jquery-elevator/jquery.elevator.min.css') }}"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('resources/plugins/jquery-sweet-modal/jquery.sweet-modal.min.css') }}"
          rel="stylesheet">
    <link href="{{ asset('resources/plugins/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('resources/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}"
          rel="stylesheet">

    <style>
        .back-arrow {
            color: white;
            transition: all .36s ease-in
        }

        .back-arrow:hover {
            color: #a9a9a9
        }

        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column
        }

        main {
            flex: 1 0 auto
        }

        .jqstooltip {
            width: 50px;
            height: 35px
        }
    </style>

</head>
<body>
<main>
    <!-- Start Navigation -->
    <nav class="navbar navbar-twuiseo navbar-sidebar bootsnav" style="z-index: 11">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a href="{{ url('/') }}" class="navbar-brand">
                    <img src="{{ asset('resources/images/admin/logo-admin-black.png') }}" class="twresponsive">
                </a>
            </div>
            <!-- End navigation header -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <ul class="nav navbar-nav" data-in="fadeInDown" data-out="fadeInUp">
                    <li class="@yield('statusH', '')"><a href="{{ route('admin.dash') }}"><i
                                    class="ion-ios-home-outline"></i> Home</a></li>
                    <li class="@yield('statusC', '')"><a href="{{ route("admin.contact") }}"><i
                                    class="ion-ios-send-outline"></i> Contatos</a></li>
                    <li class="@yield('statusP', '')"><a href="{{ route("admin.project") }}"><i
                                    class="fa fa-stack-exchange"></i>
                            Projetos</a></li>
                    <li><a href="trilha.html"><i class="ion-ios-analytics-outline"></i> Trilhas</a></li>
                </ul>

                <div class="share" align="center">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <!-- End Navigation -->

    <section class="bar-top">
        <a href="{{ url('/') }}" class="back-arrow"><i class="fa fa-arrow-left"></i></a>
        <input type="text" class="search" placeholder=" Pesquisar">

        <span class="user-info">

        <img src="{{ asset('resources/images/user-test.png') }}" alt="User_pic">
        <b>Olá, {{ $fName }}</b>
      <a href="{{ route('logout') }}" class="logout-user"
         onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="ion-ios-log-out"></i>
              </a>
    </span>
    </section>
    <section class="info-local">
        <a href="{{ url('home') }}">Dashboard</a> > Administração
        <span class="date"><i class="ion-ios-calendar-outline"></i> {{ date('d/m/Y') }}</span>
    </section>

    @yield('content')

</main>

<div class="pull-content-up"></div>

<footer>
    &copy; TWUISEO Marketing Digital e Desenvolvimento Web - 2017
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
<script src="{{ asset('resources/js/admin/script.min.js') }}"></script>

@yield('scripts')

</body>
</html>