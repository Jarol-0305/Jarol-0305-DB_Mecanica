<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DB_Mecanica</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #000;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }


        /* style botones de layouts */


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
  
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a class="nav-link menuhome" style="padding-top: 7%"  href="{{ url('/home') }}">Home</a>
            @else
            <a class="nav-link menuhome" style="padding-top: 7%" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a class="nav-link menuhome" style="padding-top: 7%" href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Car repair
            </div>

            <div class="links">
                <a href="https://github.com/">GitHub</a>
            </div>
        </div>
    </div>
</body>
</html>
