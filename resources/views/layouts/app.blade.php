<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mecanica</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
   
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>    

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>

    <body>

      <style>
        .menuhome {
          box-sizing: border-box;
          width: 140px;
          height: 40px;
          margin: 6px 5px 5px 5px;
          background:   #fdfefe ;
          color:   #000 ;
          padding: 8px 12px 12px 12px;
          text-align: center;
          position: relative;

      }

      .menuhome:before,
      .menuhome:after {
          content: "";
          display: block;
          position: absolute;
          left: 2;
          background: rgb( 28, 40, 51 );
          -webkit-transition: all 0.6s;
          transition: all 0.6s;

      }

      .menuhome:before {
          height: 2px;
          width: 0;
          top: 0;
          box-shadow: 140px 38px rgb( 28, 40, 51 , 0.5);
      }

      .menuhome:after {
          height: 0;
          top: 0;
          width: 2px;
          box-shadow: 138px 40px rgb( 28, 40, 51 );
      }

      .menuhome:hover:after {
          height: 95%;
          box-shadow: 138px 0px rgb( 28, 40, 51 );
      }

      .menuhome:hover:before {
          width: 100%;
          box-shadow: 0px 36px rgba( 28, 40, 51 , 0.978);
      }
  </style> 

  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background:  #eaeded ;">
        <div class="container">
            @guest
            <a class="nav-link menuhome" href="{{ url('/') }}">
                Inicio
            </a>

            @else
            <div class="row" style="margin-left: -5%;">
              <a style="background:  #8D8C8F; height: 38.5px; text-decoration: none;" class="menuhome" href="{{route('usuarios')}}">Usuarios</a> 
              <a style="background:  #8D8C8F; height: 38.5px; text-decoration: none;" class="menuhome" href="{{route('mecanicos')}}">Mecanicos</a>
              <a style="background:  #8D8C8F; height: 38.5px; text-decoration: none;" class="menuhome" href="{{route('clientes')}}">Clientes</a>
              <a style="background:  #8D8C8F; height: 38.5px; text-decoration: none;" class="menuhome" href="{{route('facturas.index')}}">Facturas</a>
              <a style="background:  #8D8C8F; height: 38.5px; text-decoration: none;" class="menuhome" href="{{route('reporte')}}">Reporte</a>
          </div>
          @endguest
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest

                @else

                <li class="nav-item dropdown" style="margin-left: 25%;">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="https://img2.freepng.es/20180330/pfe/kisspng-computer-icons-maintenance-mechanic-engineering-mechanic-5abefd6f502611.1722055415224661593283.jpg" style="width: 30px;height: 30px;">
                        {{ Auth::user()->usu_usuario }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <div style="margin-left:24% ;">
                            <img src="https://img2.freepng.es/20180330/pfe/kisspng-computer-icons-maintenance-mechanic-engineering-mechanic-5abefd6f502611.1722055415224661593283.jpg" style="width:80px ;height: 85px;">
                        </div>

                        <a class="btn btn-outline-secondary" style="margin-left: 15%; margin-top: 5%" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Cerrar sesión') }}</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<main class="py-4">
    @yield('content')
</main>
</div>
</body>
</html>