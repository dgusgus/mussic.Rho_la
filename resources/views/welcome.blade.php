<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RHO_LA.MUSIC</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            html, body {
                background-color: teal;
                color: #fff;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Ingresar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <img src="{{ asset('images/audifonos-dj.jpg')}}" alt="">       
            <div class="content">
<<<<<<< HEAD
                <div class="title m-b-md">
                    RHO_LA.MuSiC
                </div>
=======
                <div id="contenedor">
                   <div>
                       <nav id=mimenu>
                        <ul>
                        <li>
                        <a href="{{route('register')}}">Registrarse</a>
                        </li>
                        <li>
                        <a href="{{route('login')}}">Iniciar sesion</a>
                        </li>
                        </ul>  
                       </nav>
                   <div class="nofloat"></div>
>>>>>>> 5feaacfe0d1a95c98e9aa5558b185a74d125cb40

                   </div>
                     <div class="parte1">
                     <img src="{{ asset('images/images.jpg')}}" alt="" >
                      </div>
                      <div class="parte2">
                      <h1>Rho_la.music</h1>
                    <span>
                        Encuentra tu musica preferida
                    </span>
                      </div>
                </div>
             <article>Disfruta de tu musica </article>
            </div>
        </div>
    </body>
</html>
