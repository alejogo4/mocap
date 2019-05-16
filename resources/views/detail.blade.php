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
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>

    </head>
    <body>

	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

        <h1 id="fh5co-logo"><a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<!-- <li><a href="index.html">Home</a></li> -->
					<li><a href="{{url('/')}}">Portafolio</a></li>
					<li><a href="{{ url('aboutView')}}">Sobre el Proyecto</a></li>
                <li><a href="{{ url('contactView') }}">Contacto</a></li>
				</ul>
			</nav>

			<div class="fh5co-footer">

				<ul>
					<li><img src="{{asset('images/Itadir.png')}}" alt="" style="padding: 5px 0; width: 100px;"></li>
					<li><img src="{{asset('images/Sennova.png')}}" alt="" style="padding: 5px 0; width: 100px;"></li>
					<li><img src="{{asset('images/Gigat.png')}}" alt="" style="padding: 5px 0; width: 100px;"></li>
					<li><img src="{{asset('images/Sena.png')}}" alt="" style="padding: 5px 0; width: 100px;"></li>
				</ul>
				<p><small>&copy; 2018 Semillero Itadir - SENA Antioquia</span> <span>Diseñado por Daniel Galvez<br>Productor Multimedia</span> <span>Medellin Antioquia </span></small></p>
			</div>

		</aside>

		<div id="fh5co-main">

			<div class="fh5co-narrow-content">
				<div class="row">

					<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
						<figure class="text-center">
							<img src="{{ Storage::url($posts->imgPublicacion) }}" alt="Free HTML5 Bootstrap" class="img-responsive">
						</figure>
					</div>

					<div class="col-md-8 col-md-offset-2 animate-box" data-animate-effect="fadeInLeft">

						<div class="col-md-9 col-md-push-3">
                        <h1>{{ $posts->nombre }}</h1>
                        <p>{{  $posts->descripcion }}</p>
						</div>

						<div class="col-md-3 col-md-pull-9 fh5co-services">
							<h3>Detalles técnicos</h3>
							<ul>
								<li>Capturado con: Vicon Shogun Live</li>
								<li>Distancia del movimiento: Lorem</li>
								<li>Formato: .FVX</li>
							</ul>
						</div>
					</div>
                </div>
                <ul>
                    @foreach($attachments as $key => $attachment)
                <a href="{{ Storage::url($attachment->url) }}" download>Descargar parte {{ $key+=1 }}</a>
                    <br>
                    @endforeach
                </ul>
			</div>
		</div>
	</div>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Stellar -->
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <!-- Counters -->
    <script src="{{ asset('js/jquery.countTo.js') }}"></script>
    <!-- MAIN JS -->
    <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
