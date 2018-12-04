<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
               <div id="fh5co-page">
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
        <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

            <h1 id="fh5co-logo"><a href="index.html"><img src="images/logo.png" alt="Free HTML5 Bootstrap Website Template"></a></h1>
            <nav id="fh5co-main-menu" role="navigation">
                <ul>
                    <!-- <li><a href="index.html">Home</a></li> -->
                    <li class="fh5co-active"><a href="/">Portafolio</a></li>
                    <li><a href="aboutView">Sobre el Proyecto</a></li>
                    <li><a href="contactView">Contacto</a></li>
                </ul>
            </nav>

            <div class="fh5co-footer">

                <ul>
                    <li><img src="images/Itadir.png" alt="" style="padding: 5px 0; width: 100px;"></li>
                    <li><img src="images/Sennova.png" alt="" style="padding: 5px 0; width: 100px;"></li>
                    <li><img src="images/Gigat.png" alt="" style="padding: 5px 0; width: 100px;"></li>
                    <li><img src="images/Sena.png" alt="" style="padding: 5px 0; width: 100px;"></li>
                </ul>
                <p><small>&copy; 2018 Semillero Itadir - SENA Antioquia</span> <span>Diseñado por Daniel Galvez<br>Productor Multimedia</span> <span>Medellin Antioquia </span></small></p>
            </div>
        </aside>

        <div id="fh5co-main">

            <div class="fh5co-narrow-content">
                <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Proyectos</span></h2>
                <div class="row animate-box" data-animate-effect="fadeInLeft">
                    @foreach($posts as $post)
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        {{-- <a href="{{ route('detail/',['id'=>$post->id]) }}"> --}}
                            <a href="{{ url('viewDetail',[$post->id]) }}">
                            <img src="{{Storage::url($post->imgPublicacion)}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">{{ $post->nombre }}</h3>
                            {{-- <p>Caminando y corriendo</p> --}}
                        </a>
                    </div>
                    @endforeach
                    <div class="clearfix visible-md-block"></div>
                </div>
            </div>

        </div>
    </div>

            </div>
        </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Stellar -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Counters -->
    <script src="js/jquery.countTo.js"></script>
    <!-- MAIN JS -->
    <script src="js/main.js"></script>
    </body>
</html>
