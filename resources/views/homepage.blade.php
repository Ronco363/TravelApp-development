<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="Hugo 0.108.0">

        <title>Welcome</title>

        <!-- Fonts -->

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
       .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
        </style>
    </head>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <img src="images/explore.png" alt="Logo" width="42" height="42" style="float:left">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <!--<a class="nav-link" href="">Shop</a>-->
                    <a class="nav-link"href="{{ route('shop') }} ">Shop</a>
                </li>
                </ul>
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                        @auth
                            <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                        @endauth
                    </div>
                @endif
            </div>
            </div>
        </nav>
    </header>
    <body>
        <main>
        </br>
        <img
        <div>
            <h1 class="titolo"> Benvenuto viaggiatore! </h1>
            <p class="descrizione"> In questa WebApp puoi scegliere 3 tipologie di attività da svolgere da solo o in gruppo. </br>
                Per continuare basta cliccare in uno dei riquadri sotto la breve descrizione di ogni attività.</p>
        </br> </br>
        </div>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                <img src="images/bici.jpg" style="width:360px;height:210px;">
                <h2 class="fw-normal text-center">Ciclismo</h2>
                <p class="ciclismo">Per coloro che vogliono scoprire nuovi percorsi o concedersi una gita fuori porta in bici!</p>
                <p><a class="btn btn-secondary" href="/ciclismo">Inizia &raquo;</a></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                <img src="images/escursione.jpg" style="width:360px;height:200px;">
                <h2 class="fw-normal text-center">Escursionismo</h2>
                <p class="escursionismo">Per gli amanti della montagna e delle avventure al limite!</p>
                <p><a class="btn btn-secondary" href="/escursionismo">Inizia &raquo;</a></p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                <img src="images/passeggiata.jpg" style="width:360px;height:200px;">
                <h2 class="fw-normal text-center">Passeggiata</h2>
                <p class="passeggiata">Per coloro che desiderano una semplice ma non meno piacevole esperienza a piedi in percorsi facili!</p>
                <p><a class="btn btn-secondary" href="/passeggiata">Inizia &raquo;</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette"></div>

        <!-- FOOTER -->
        <footer class="container">
            <p>&copy; 2023 Marco Raimondi e Andrea Bonoli </p>
        </footer>
        </main>
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'></script>
    </body>
</html>
