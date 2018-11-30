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
                <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Librería de Dobles Digitales</span></h2>
                <div class="row animate-box" data-animate-effect="fadeInLeft">
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Ciclos de marcha</h3>
                            <p>Caminando y corriendo</p>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Saltos</h3>
                            <p>Desde el origen y puntos elevados</p>
                        </a>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Caídas</h3>
                            <p>Por zancadilla y desplome</p>
                        </a>
                    </div>
                    <div class="clearfix visible-md-block"></div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_4.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Ciclos de pelea</h3>
                            <p>Ciclos de golpes con puño y patada</p>
                        </a>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_5.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Muertes</h3>
                            <p>Por disparos y armas blancas</p>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_6.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Movimientos varios </h3>
                            <p>Acciones comunes como chatear, hacer aseo</p>
                        </a>
                    </div>
                    <div class="clearfix visible-md-block"></div>
                </div>
            </div>

            <div class="fh5co-narrow-content">
                <h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Piezas de Fotogrametría</span></h2>
                <div class="row animate-box" data-animate-effect="fadeInLeft">
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Piezas de la Ciudad</h3>
                            <p>Elementos de la calle comunes de Medellin</p>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Vehiculos</h3>
                            <p>Buses, Motocicletas, Automóviles</p>
                        </a>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Naturaleza</h3>
                            <p>Árboles</p>
                        </a>
                    </div>
                    <div class="clearfix visible-md-block"></div>
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 work-item">
                        <a href="work.html">
                            <img src="images/work_4.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
                            <h3 class="fh5co-work-title">Lugares</h3>
                            <p>Edificios, Fachadas, Calles</p>
                        </a>
                    </div>
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
