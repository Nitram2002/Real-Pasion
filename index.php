<?php
	session_start(); // Inicia la sesión

	// Verifica si el usuario ha iniciado sesión
	if (isset($_SESSION['usuario'])) {  // Usamos 'usuario' en lugar de 'username'
		$usuario = $_SESSION['usuario']; // El nombre de usuario desde la sesión
	} else {
		$usuario = null; // No hay usuario conectado
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Pasion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lib.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/customScrollbar.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <!-- loader -->
    <div class="loading-page">
        <svg id="svg" version="1.1" viewBox="0 0 2048 521" width="1280" height="1280" xmlns="http://www.w3.org/2000/svg">
            <path transform="translate(1305,151)" d="m0 0h16l13 5 12 9 5 10 1 14-1 26h-2l-1 13-2 2-1 15-3 3-1 11-2 2-1 27 9-2 11-9 9-7 12-11 2-3h2l2-4 7-7 8-11 11-11 7-8 8-10 12-12 1-2h2l2-4 15-15 8-7 5-4 5-2 7 1 7 5 9 17 6 16 5 20 2 4 4 31v32l7-3 10-6 20-14 12-8h6l6 2 3-5 9-27 6-16-5 1h-18l-8-5-3-6v-10l6-9 11-8 14-7 17-6 14-1h11l10 1 5 6 1 3v16l-12 36-6 16-5 12-8 19-5 12-4 10-4 9-1 4 26-12 9-3h11l9 4v-8l3-12 1-14 5-16 10-21 8-13 7-11 7-8 15-15 19-12 13-6 7-1 2-2h29l12 4 11 7 5 4 8 10 6 10v40l-4 19-4 14-15 30-6 8-7 9-17 17h-2v2l-16 9-13 6-10 3-13 3h-14l-17-4-11-6-8-8-7-13-2-8-4 2-7 8-4 5-8 6-14 5-13 6-19 7-7 1-2 2h-10l-10-5-6-5-3-10 2-17-7 3-10 6-16 8-14 6-22 7-25 4h-12l-14-4-9-6-6-9-2-4 1-9 4-6 6-3 40-1 2-4-2-38-4-21-2-5-5 4h-2l-2 4-17 17-11 9-11 11-9 7-14 16-13 11-11 7-11 8-10 5-10 4h-17l-12-7-5-4-5-8v-9l3-10-8 3-6 4-13 10-10 7-18 10-13 4h-33l-10-9-5-7-5-15v-7l-2-7 1-7 1-2 2-17 2-2 1-7 3-7 4-11 10-18 7-8 9-11 6-10 19-19 10-5 11-5 13-6h2l1-3 6-1zm461 40-10 2-9 6-15 15-8 13-7 12-5 12-4 14v21l3 8 4 4 10 2 1-1 9-2 10-7 10-9 11-16 7-12 8-20 3-9 1-15-2-8-4-6-5-3zm-473 7-7 3-10 8-6 5-9 11-6 7-3 3-3 5-7 7-8 16-3 9-2 7v6l3 5 8 2 9-1 11-7 12-11 11-13 8-10 9-16 5-11 2-7v-14l-2-3z" fill="#FEBD09"/>
            <path transform="translate(809,3)" d="m0 0h11l10 5 5 8 1 2-1 12-3 13-13 40-7 19-9 25-10 26-14 43-11 30-14 41-8 21-12 30-5 11-4 8-5 5-9 1h-12l-6-5-3-6-1-11-30 15-8 3h-15l-12-7-6-5-4-6v-13l1-6-9 3-8 7-10 7-9 6-20 11-10 3h-34l-10-9-7-12-3-14h-3l-14 11-15 10-16 8-13 6-14 4-15 3-12 2-2 1h-21l-3-2-10-2-13-9-10-11-7-17-1-3v-23l4-17 6-16 10-22 6-11 6-10 6-8 7-9 12-13 3-3h2v-2l11-8 12-6 18-6h24l13 4 13 8 7 8 4 10 2 15-1 3-1 13h-2l-2 7-6 7-4 6-8 8-15 11-16 10-12 6-26 10-21 5-2 11 5 8 4 3h15l5-2 9-2 3-2 7-1 12-6 6-2 15-8 10-5 14-8 11-7 8-2 3-5 2-6 8-15 4-7 8-12 14-18 12-12 11-8 10-7 10-5 23-10 11-2 2-1h13l14 4 15 11 5 9v35l-2 3-1 15-2 2-2 12-2 2-1 12-2 4-1 19-1 8h14l7-4 11-8 14-10 9-6 4-13 9-25 6-17 18-50 12-36 12-33 10-26 13-33 7-15 6-5zm-376 187-9 3-8 4-10 10-12 16-6 9-1 9 1 2 6-1 10-3 17-7 13-10 6-8 4-5 2-5v-11l-5-3zm175 8-7 1-10 6-6 7-10 10-6 7-12 16-8 14-4 9-2 6-1 2v7l4 8h17l6-4 12-9 12-14 10-12 8-13 6-12 4-15v-8l-1-5-6-1z" fill="#FEBD09"/>
            <path transform="translate(187,7)" d="m0 0h50l10 2 17 2 13 5 10 2 16 8 12 7 12 9 19 19 8 11 6 10 2 9 1 2 1 22-1 16-2 4-2 10-8 16-9 11-10 9-14 10-13 8-20 9-9 4-8 2-11 5-6 2-15 4-10 3-6 2 8 20 5 12 11 30 5 13 3 10 4 10 8 22 8 23 6 15 14 40 3 12v17l-2 4-6 4-14 1-8-2-6-3-5-6-7-15-7-17-5-13-14-35-5-13-6-15-10-24-11-26-5-13-14-35-1-2-9 3-10 3-8 1-3 2-13 2-16 3-5 8-6 16-13 29-11 25-13 29-8 15-8 11-10 10-15 1-8-2-8-7-2-4v-11l5-14 8-17 11-26 8-18 11-25 10-24 8-16 5-13 8-16 7-17 8-16 10-21 6-15 8-16 12-25 11-23 7-15 1-3-18 2-12 3-9 3-13 5-17 5-8 3-10 3-21 1-10-4-5-8v-11l4-8 9-8 19-10 13-5 12-3 3-2 12-2 21-5 14-3 30-4 18-2zm7 47-2 1-3 10-10 24-8 17-20 52-8 17-10 25v2h9l22-6 21-5 14-4 12-3 26-8 10-4 7-2 10-4 13-6 19-10 10-9 6-9 3-8v-14l-4-12-6-9-7-8-8-8-14-9-18-6-17-3z" fill="#FEBD09"/>
            <path transform="translate(1064,3)" d="m0 0h34l23 2 25 4 13 3 21 7 17 9 16 13 8 9 8 14 7 18 2 7v26l-5 11-1 11-2 1-3 9-4 6-3 5-14 14-11 8-9 9h-2l-1 3-6 1v2l-9 4-18 11-25 10-39 14-10 2v2h-8l-23 7-36 12-26 10h-2v6l-2 3-2 12-2 4-1 9-2 1-1 10-3 6-15 48-2 5-3 9-7 12-10 11-9 3-1 1h-7l-11-4-4-3-3-8-1-3 5-16 6-17 8-26 11-33 6-21 1-2-10 2-3 1h-10l-12-6-2-2-2-7 1-6 3-6 16-9 12-5 24-8 3-12 10-32 24-72 14-44 2-10-37 8-37 11-2 1-9 1h-10l-8-6-7-10v-10l4-6 11-9 19-9 25-8 25-6 25-5 23-3 21-2 5-1zm16 45-12 2-15 2-2 10-3 10-4 10-3 10-9 27-3 7-2 8-2 6-4 13-2 3-2 8-2 6-3 7-5 17-5 13v5l6-1 26-8 21-6 21-7 14-5 20-7 10-4 22-11 2-2 7-3 7-7 9-7 8-11 5-11 2-7 1-15v-11l-5-13-7-10-12-9-14-6-11-3z" fill="#FEBD09"/>
            <path transform="translate(1896,151)" d="m0 0 6 1 6 4 3 5 3 9-1 10-3 20-2 4-2 9-5 17h3l10-9 7-7 9-11 6-8 4-4h2l1-3 8-7 11-9 10-8 14-7 9-3h12l7 4 7 8 3 8v9l-8 24-9 21-8 20-11 28-8 17-1 5 8-2 10-4 11-7 16-6 1-1h12l7 6 2 5-1 7-7 9-11 10-7 6-30 15-7 3-7 2-1 1-15 2h-11l-7-2-5-6-2-4v-19l4-11 3-8 10-28 6-18 1-7-7 4-12 11-14 15-13 18-4 6-5 6-11 14-21 21-4 3-5 2-4 2-9-2-8-5-7-8v-15l5-18 6-17 9-25 5-16 5-19 3-16h-7l-16-4-6-4-3-4-1-3v-7l4-6h2l2-4 10-7 9-4 13-5 15-1z" fill="#FEBD09"/>
        </svg>

        <div class="name-container">
            <div class="logo-name">Futbol Club</div>
        </div>
    </div>

    <div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Mobile Menu Start
		*************************************-->
		<div id="tg-navigationm-mobile" class="tg-navigationm-mobile tg-navigation collapse navbar-collapse">
			<span id="tg-cPerdio" class="tg-cPerdio fa fa-cPerdio"></span>
			<div class="tg-colhalf">
				<ul>
					<li>
						<a href="#">Inicio</a>
					</li>
					<li class="menu-item-has-children">
						<a href="#">Entrenamientos</a>
						<ul class="tg-dropdown-menu">
							<li><a href="#">Entrenamientos</a></li>
                            <li><a href="views/detallesJugador.html">Jugadores</a></li>
                            <li><a href="#">Entrenadores</a></li>
						</ul>
					</li>
					<li><a href="views/tiquete.html">Tiquetes</a></li>
					<li class="menu-item-has-children">
						<a href="views/resultados.html">Resultados de encuentros</a>
					</li>
				</ul>
			</div>
			<div class="tg-colhalf">
				<ul>
					<li class="menu-item-has-children">
						<a href="views/tienda.html">Tienda</a>
					</li>
					<li class="menu-item-has-children">
						<a href="views/galeria.html">Galeria</a>
					</li>
					<li><a href="views/contacto.html">Contactanos</a></li>
					<li><a href="views/nosotros.html">Sobre nosotros</a></li>
			</div>
		</div>
		<!--************************************
				Mobile Menu End
		*************************************-->
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
					<div class="row">
						<div class="tg-topbar tg-haslayout">
							<nav id="tg-topaddnav" class="tg-topaddnav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-addnavigationm-mobile">
										<i class="fa fa-arrow-right"></i>
									</button>
								</div>
								<div id="tg-addnavigationm-mobile" class="tg-addnavigationm-mobile collapse navbar-collapse">
									<div class="tg-colhalf pull-right">
										<ul id="auth-buttons" style="<?php echo $username ? 'display:none;' : 'display:flex;'; ?>">
											<li><a href="javascript().html" data-toggle="modal" data-target="#tg-login">Acceso</a></li>
											<li><a href="javascript().html" data-toggle="modal" data-target="#tg-register">Registrarse</a></li>
											<li>
												<a id="tg-btn-search" href="javascript:void(0)"><i class="fa fa-search"></i></a>
											</li>
										</ul>
									
										<div id="user-info" style="<?php echo $username ? 'display:flex;' : 'display:none;'; ?>">
											<li><span id="username-display"><?php echo htmlspecialchars($usuario); ?></span></li>
											<li><a href="php/cerrar_sesion.php">Cerrar sesión</a></li>
										</div>
									</div>
									<div class="tg-colhalf">
										<ul class="tg-socialicons">
											<li>
												<a href="#">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-google-plus"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</nav>
						</div>
						<nav id="tg-nav" class="tg-nav brand-center">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigationm-mobile">
									<i class="fa fa-bars"></i>
								</button>
								<strong class="tg-logo">
									<a href="index-2.html"><img src="fotos real pasion/logo-pag.svg" alt="image description"></a>
								</strong>
							</div>
							<div id="tg-navigation" class="tg-navigation">
								<div class="tg-colhalf">
                                    <ul>
                                        <li class="active">
                                            <a href="#">Inicio</a>
                                        </li>
                                        <li>
                                            <a href="#">Entrenamientos</a>
                                            <ul class="tg-dropdown-menu">
                                                <li><a href="#">Entrenamientos</a></li>
                                                <li><a href="views/detallesJugador.html">Jugadores</a></li>
                                                <li><a href="#">Entrenadores</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="views/tiquete.html">Tiquetes</a></li>
                                        <li>
                                            <a href="views/resultados.html">Resultados</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tg-colhalf">
                                    <ul>
                                        <li>
                                            <a href="views/tienda.html">Tienda</a>
                                        </li>
                                        <li>
                                            <a href="views/galeria.html">Galeria</a>
                                        </li>
                                        <li><a href="views/contacto.html">Contactanos</a></li>
                                        <li>
                                            <a href="#"><i class=" fa fa-navicon"></i></a>
                                            <ul>
                                                <li><a href="views/nosotros.html">Sobre nosotros</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->

		<div id="miVentana" class="ventana-emergente">
			<div class="contenido-ventana">
				<span class="cerrar" onclick="cerrarVentana()">&times;</span>
				<div class="tg-contentbox">
					<div class="tg-section-heading"><h2>Real Pasion <span>VS</span> Real Pasion</h2></div>
					<div class="tg-description">
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minimam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					</div>
					<div class="tg-counters">
						<div class="tg-counter tg-days"></div>
						<div class="tg-counter tg-hours"></div>
						<div class="tg-counter tg-minutes"></div>
						<div class="tg-counter tg-seconds"></div>
					</div>
					<div class="tg-btnbox">
						<a class="tg-btn" href="#"><span>Leer mas</span></a>
						<a class="tg-btn" href="views/tiquete.html"><span>Comprar tiquete</span></a>
					</div>
				</div>
			</div>
		</div>

		<!--************************************
				Home Slider Start
		*************************************-->
		<div class="tg-sliderbox">
			<div class="tg-imglayer">
				<img src="images/bg-pattran.png" alt="image desctription">
			</div>
			<div id="tg-home-slider" class="tg-home-slider tg-haslayout">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="container">
							<figure class="floating">
								<!-- #region <img class="jugador" src="fotos real pasion/jugador.png" alt="image description">-->
							</figure>
							<div class="tg-slider-content">
								<h1>Real Pasion <span>vs Real Pasion</span></h1>
								<div class="tg-btnbox">
									<h2>el proximo 30/10</h2>
									<a class="tg-btn" href="views/tiquete.html"><span>Mirar Estadio</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="container">
							<figure class="floating">
								<!-- #region <img src="fotos real pasion/jugador.png" alt="image description">-->
							</figure>
							<div class="tg-slider-content">
								<h1>Real Pasion <span>vs Real Pasion</span></h1>
								<div class="tg-btnbox">
									<h2>el proximo 30/10</h2>
									<a class="tg-btn" href="views/tiquete.html"><span>Mirar Estadio</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="container">
							<figure class="floating">
								<!-- #region <img src="fotos real pasion/jugador.png" alt="image description">-->
							</figure>
							<div class="tg-slider-content">
								<h1>Real Pasion <span>vs Real Pasion</span></h1>
								<div class="tg-btnbox">
									<h2>el proximo 30/10</h2>
									<a class="tg-btn" href="views/tiquete.html"><span>Mirar Estadio</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tg-btn-next">
					<span>sig</span>
					<span class="fa fa-angle-down"></span>
				</div>
				<div class="tg-btn-prev">
					<span>ant</span>
					<span class="fa fa-angle-down"></span>
				</div>
			</div>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2></h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="tg-themetabs">
							<ul class="tg-themetabnav" role="tablist">
								<li role="presentation" class="active">
									<a href="#recentvictories" aria-controls="recentvictories" role="tab" data-toggle="tab">Mision</a>
								</li>
								<li role="presentation">
									<a href="#recentdefeat" aria-controls="recentdefeat" role="tab" data-toggle="tab">Vision</a>
								</li>
								<li role="presentation">
									<a href="#earlierstats" aria-controls="earlierstats" role="tab" data-toggle="tab">Valores</a>
								</li>
							</ul>
							<div class="tab-content tg-themetabcontent">
								<div role="tabpanel" class="tab-pane active" id="recentvictories">
									<h2>Nuestra mision es:</h2>
									<p style="font-size: 22px;">En Real Pasión, nuestra misión es formar futbolistas integrales a través de un enfoque holístico que combine el desarrollo de habilidades técnicas, físicas y mentales con un fuerte compromiso hacia los valores fundamentales del deporte. Nos esforzamos por inculcar en nuestros jugadores la disciplina, el trabajo en equipo, el respeto, y sobre todo, la pasión por el fútbol. Además, buscamos fomentar el crecimiento personal, ayudando a los jóvenes a construir una mentalidad ganadora que les permita enfrentar los desafíos tanto en el deporte como en su vida diaria.</p>
								</div>
								<div role="tabpanel" class="tab-pane" id="recentdefeat">
									<h2>Nuestra Vision es:</h2>
									<p style="font-size: 22px;">Aspiramos a ser reconocidos como una de las academias de fútbol más prestigiosas a nivel nacional e internacional, destacándonos por nuestra capacidad de identificar, desarrollar y promover talentos jóvenes que sobresalgan en el mundo del fútbol profesional. Queremos ser un referente en la formación de jugadores que no solo tengan un alto rendimiento dentro del campo, sino que también sean ejemplos de deportividad, liderazgo y compromiso social, contribuyendo de manera positiva a sus comunidades y al desarrollo del fútbol en el país.</p>
								</div>
								<div role="tabpanel" class="tab-pane" id="earlierstats">
									<h2>Nuestros valores son:</h2>
									<p style="font-size: 22px">
										<h3>Pasión:</h3>
										<p style="font-size: 20px;">Vivimos y respiramos fútbol. Fomentamos en nuestros jugadores el amor por el deporte, animándolos a dar lo mejor de sí en cada entrenamiento y partido, impulsados por el deseo de superarse y mejorar constantemente.</p>
										
										<h3>Disciplina:</h3>
										<p style="font-size: 20px;">Creemos que el éxito en el fútbol y en la vida se basa en el compromiso con el esfuerzo y la constancia. Inculcamos en nuestros jugadores la importancia de la responsabilidad, el autocontrol y la perseverancia, tanto dentro como fuera del campo.</p>
										
										<h3>Trabajo en equipo:</h3>
										<p style="font-size: 20px;">El fútbol es un deporte colectivo, y en Real Pasión promovemos la colaboración y el compañerismo. Enseñamos a nuestros jugadores a trabajar juntos, respetando las fortalezas de cada uno, y entendiendo que los logros más grandes se alcanzan en equipo.</p>
										
										<h3>Respeto:</h3>
										<p style="font-size: 20px;">Valoramos el respeto hacia los compañeros, entrenadores, árbitros y adversarios. Nos esforzamos por crear un ambiente en el que cada jugador entienda la importancia de actuar con humildad, juego limpio y consideración por los demás.</p>
										
										<h3>Superación personal:</h3>
										<p style="font-size: 20px;">Buscamos que cada jugador, más allá de su nivel futbolístico, tenga la determinación de mejorar continuamente. Les enseñamos a enfrentar los retos con valentía, a aprender de los errores y a celebrar sus logros personales como pasos hacia su desarrollo integral.</p>
										
										<h3>Responsabilidad social:</h3>
										<p style="font-size: 20px;">En Real Pasión, creemos en el poder transformador del fútbol dentro de la comunidad. Fomentamos en nuestros jugadores el compromiso con su entorno, promoviendo valores como la solidaridad, el liderazgo y la contribución positiva a la sociedad.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tg-section-name2">
						<h2></h2>
					</div>
				</div>
			</section>
			<!--************************************
					About Us End
			*************************************-->
			<!--************************************
					Upcoming Match Start
			*************************************-->
			<section class="tg-haslayout tg-bgstyleone">
				<div class="tg-bgboxone"></div>
				<div class="tg-bgboxtwo"></div>
				<div class="tg-bgpattrant">
					<div class="container">
						<div class="row">
							<div class="tg-upcomingmatch-counter">
								<div class="col-md-4 col-sm-4 col-xs-12 hidden-xs">
									<figure>
										<img src="images/img-02.png" alt="image description">
									</figure>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12">
									<div class="tg-contentbox">
										<div class="tg-section-heading"><h2>Real Pasion <span>VS</span> Real Pasion</h2></div>
										<div class="tg-description">
											<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minimam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>
										<div class="tg-counters">
											<div class="tg-counter tg-days"></div>
											<div class="tg-counter tg-hours"></div>
											<div class="tg-counter tg-minutes"></div>
											<div class="tg-counter tg-seconds"></div>
										</div>
										<div class="tg-btnbox">
											<a class="tg-btn" href="views/tiquete.html"><span>Comprar tiquete</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Upcoming Match End
			*************************************-->
			<!--************************************
					Latest Result Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>Ultimos Resultados</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-latestresult">
								<div class="row">
									<div class="col-md-8 col-sm-12 col-xs-12">
										<div class="tab-content tg-tabscontent">
											<div role="tabpanel" class="tab-pane active" id="one">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>6 - 4</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Gano )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Perdio )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="two">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>6 - 4</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Gano )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Perdio )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="three">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>6 - 4</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Gano )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Perdio )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="four">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>6 - 4</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Gano )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Perdio )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="five">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>6 - 4</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Gano )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Perdio )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="six">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>6 - 4</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Gano )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Perdio )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane" id="seven">
												<div class="tg-matchresult">
													<div class="tg-box">
														<div class="tg-score"><h3>6 - 4</h3></div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Gano )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Roman Fenley (15)</li>
																<li>Miguel Beckel (19)</li>
																<li>Jonah Jolicoeur (39)</li>
																<li>Connie Harland (48)</li>
															</ul>
														</div>
														<div class="tg-teamscore">
															<strong class="tg-team-logo">
																<a href="#">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</a>
															</strong>
															<div class="tg-team-nameplusstatus">
																<h4><a href="#">Real Pasion ( Perdio )</a></h4>
															</div>
															<ul class="tg-playernameplusgoadtime">
																<li>Ethan Ryberg (22)</li>
																<li>Wilbert Delbosquel (27)</li>
																<li>Maynard Brabant (42)</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-12 col-xs-12">
										<div id="tg-matchscrollbar" class="tg-matchscrollbar tg-allmatchstatus">
											<ul class="tg-matchtabnav" role="tablist">
												<li role="presentation" class="active">
													<a href="#one" aria-controls="one" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Gano</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Perdio</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#two" aria-controls="two" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Gano</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Perdio</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#three" aria-controls="three" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Gano</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Perdio</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#four" aria-controls="four" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Gano</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Perdio</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#five" aria-controls="five" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																		<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Gano</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Perdio</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#six" aria-controls="six" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Gano</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Perdio</h4>
															</div>
														</div>
													</a>
												</li>
												<li role="presentation">
													<a href="#seven" aria-controls="seven" role="tab" data-toggle="tab">
														<div class="tg-match">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Gano</h4>
															</div>
															<div class="tg-box">
																<h3>6 - 4</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h4>Perdio</h4>
															</div>
														</div>
													</a>
												</li>
											</ul>
										</div>
										<div class="tg-btnbox">
											<a class="tg-btn" href="views/resultados.html"><span>Ver Todos</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tg-section-name2">
						<h2>Ultimos Resultados</h2>
					</div>
				</div>
			</section>
			<!--************************************
					Latest Result End
			*************************************-->
			<!--************************************
					Statistics Start
			*************************************-->
			<section class="tg-main-section tg-haslayout tg-bgdark">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<div class="tg-statistics">
								<div class="tg-statistic tg-goals">
									<span class="tg-icon icon-Icon1"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="2700" data-speed="8000" data-refresh-interval="50">2700</span></h2>
									<h3>Goles</h3>
								</div>
								<div class="tg-statistic tg-activeplayers">
									<span class="tg-icon icon-Icon2"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="1673" data-speed="8000" data-refresh-interval="50">1673</span></h2>
									<h3>Jugadores Activos</h3>
								</div>
								<div class="tg-statistic tg-activeteams">
									<span class="tg-icon icon-Icon3"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="236" data-speed="8000" data-refresh-interval="50">236</span></h2>
									<h3>Equipo Activo</h3>
								</div>
								<div class="tg-statistic tg-earnedawards">
									<span class="tg-icon icon-Icon4"></span>
									<h2><span class="tg-statistic-count" data-from="0" data-to="197" data-speed="8000" data-refresh-interval="50">197</span></h2>
									<h3>Premios Ganados</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Statistics End
			*************************************-->
			<!--************************************
					Fixtures Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>Resultados</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-latestresult">
								<div class="row">
									<div class="col-md-5 col-sm-12 col-xs-12">
										<div class="tg-contentbox">
											<div class="tg-section-heading"><h2>consectetur adipisicing elit sedia tempor labore</h2></div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod temport incididunt utia labore et dolore magna aliqua enima ad minim veniam quistrud on ullamco laboris nisiut aliquip ex ea commodo consequat.</p>
											</div>
											<div class="tg-btnbox">
												<a class="tg-btn" href="#"><span>Ver Todo</span></a>
											</div>
										</div>
									</div>
									<div class="col-md-7 col-sm-12 col-xs-12">
										<div id="tg-upcomingmatch-slider" class="tg-upcomingmatch-slider tg-upcomingmatch">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img style="width: 70px;" src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h3>Real Pasion</h3>
															</div>
															<div class="tg-box">
																<h3>vs</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img style="width: 70px;" src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h3>Real Pasion</h3>
															</div>
														</div>
														<div class="tg-matchhover">
															<address>Estadio Bogota, 19:00 hrs</address>
															<div class="tg-btnbox">
																<a class="tg-btn" href="views/resultados.html"><span>Leer mas</span></a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img style="width: 70px;" src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h3>Real Pasion</h3>
															</div>
															<div class="tg-box">
																<h3>vs</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img style="width: 70px;" src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h3>Real Pasion</h3>
															</div>
														</div>
														<div class="tg-matchhover">
															<address>Estadio Bogota, 19:00 hrs</address>
															<div class="tg-btnbox">
																<a class="tg-btn" href="views/resultados.html"><span>Leer mas</span></a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img style="width: 70px;" src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h3>Real Pasion</h3>
															</div>
															<div class="tg-box">
																<h3>vs</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img style="width: 70px;" src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h3>Real Pasion</h3>
															</div>
														</div>
														<div class="tg-matchhover">
															<address>Estadio Bogota, 19:00 hrs</address>
															<div class="tg-btnbox">
																<a class="tg-btn" href="views/resultados.html"><span>Leer mas</span></a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img style="width: 70px;" src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h3>Real Pasion</h3>
															</div>
															<div class="tg-box">
																<h3>vs</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img style="width: 70px;" src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h3>Real Pasion</h3>
															</div>
														</div>
														<div class="tg-matchhover">
															<address>Estadio Bogota, 19:00 hrs</address>
															<div class="tg-btnbox">
																<a class="tg-btn" href="views/resultados.html"><span>Leer mas</span></a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-match">
														<div class="tg-matchdetail">
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img style="width: 70px;" src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h3>Real Pasion</h3>
															</div>
															<div class="tg-box">
																<h3>vs</h3>
															</div>
															<div class="tg-box">
																<strong class="tg-teamlogo">
																	<img style="width: 70px;" src="fotos real pasion/logo-pag.svg" alt="image description">
																</strong>
																<h3>Real Pasion</h3>
															</div>
														</div>
														<div class="tg-matchhover">
															<address>Estadio Bogota, 19:00 hrs</address>
															<div class="tg-btnbox">
																<a class="tg-btn" href="views/resultados.html"><span>Leer Mas</span></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
											<div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tg-section-name2">
						<h2>Equipo</h2>
					</div>
				</div>
			</section>
			<!--************************************
					Fixtures End
			*************************************-->
			<!--************************************
					Top Rated Player Start
			*************************************-->
			<section class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="tg-section-name">
						<h2>Mejores Jugadores</h2>
					</div>
					<div class="col-sm-11 col-xs-11 pull-right">
						<div class="row">
							<div class="tg-topratedplayer tg-haslayout">
								<div class="row">
									<div class="col-md-7 col-sm-12 col-xs-12">
										<div id="tg-playerscrollbar" class="tg-players tg-playerscrollbar">
											<div class="tg-player">
												<div class="col-sm-6 col-xs-6 pull-right">
													<div class="tg-playcontent">
														<a class="tg-theme-tag" href="#">SWEEPER</a>
														<h3><a href="#">Hustlin’ Owls</a></h3>
														<span class="tg-stars"><span></span></span>
														<div class="tg-description">
															<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
														</div>
														<ul class="tg-socialicons">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="fotos real pasion/mj.jpg" alt="image description">
														</a>
													</figure>
												</div>
											</div>
											<div class="tg-player">
												<div class="col-sm-6 col-xs-6 pull-right">
													<div class="tg-playcontent">
														<a class="tg-theme-tag" href="#">SWEEPER</a>
														<h3><a href="#">Hustlin’ Owls</a></h3>
														<span class="tg-stars"><span></span></span>
														<div class="tg-description">
															<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
														</div>
														<ul class="tg-socialicons">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="fotos real pasion/mj2.jpg" alt="image description">
														</a>
													</figure>
												</div>
											</div>
											<div class="tg-player">
												<div class="col-sm-6 col-xs-6 pull-right">
													<div class="tg-playcontent">
														<a class="tg-theme-tag" href="#">SWEEPER</a>
														<h3><a href="#">Hustlin’ Owls</a></h3>
														<span class="tg-stars"><span></span></span>
														<div class="tg-description">
															<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
														</div>
														<ul class="tg-socialicons">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="fotos real pasion/mj.jpg" alt="image description">
														</a>
													</figure>
												</div>
											</div>
											<div class="tg-player">
												<div class="col-sm-6 col-xs-6 pull-right">
													<div class="tg-playcontent">
														<a class="tg-theme-tag" href="#">SWEEPER</a>
														<h3><a href="#">Hustlin’ Owls</a></h3>
														<span class="tg-stars"><span></span></span>
														<div class="tg-description">
															<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
														</div>
														<ul class="tg-socialicons">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="fotos real pasion/mj2.jpg" alt="image description">
														</a>
													</figure>
												</div>
											</div>
											<div class="tg-player">
												<div class="col-sm-6 col-xs-6 pull-right">
													<div class="tg-playcontent">
														<a class="tg-theme-tag" href="#">SWEEPER</a>
														<h3><a href="#">Hustlin’ Owls</a></h3>
														<span class="tg-stars"><span></span></span>
														<div class="tg-description">
															<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
														</div>
														<ul class="tg-socialicons">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#"><i class="fa fa-dribbble"	></i></a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="fotos real pasion/mj.jpg" alt="image description">
														</a>
													</figure>
												</div>
											</div>
											<div class="tg-player">
												<div class="col-sm-6 col-xs-6 pull-right">
													<div class="tg-playcontent">
														<a class="tg-theme-tag" href="#">SWEEPER</a>
														<h3><a href="#">Hustlin’ Owls</a></h3>
														<span class="tg-stars"><span></span></span>
														<div class="tg-description">
															<p>Incididunt utia labore et dolore siti magna aliqua adinim lipat</p>
														</div>
														<ul class="tg-socialicons">
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
															<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-6 col-xs-6">
													<figure>
														<a href="#">
															<img src="fotos real pasion/mj2.jpg" alt="image description">
														</a>
													</figure>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-5 col-sm-12 col-xs-12">
										<div class="tg-contentbox">
											<div class="tg-section-heading"><h2>consectetur adipisicing elit sed do eiusmid tempor incididunt labore</h2></div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utia labore et dolore magna aliqua enim ad minim veniam quistrud on ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum doloreeu fugiat nulla pariatur cepteur sint occaecat.</p>
											</div>
											<div class="tg-btnbox">
												<a class="tg-btn" href="views/detallesJugador.html"><span>Ver Todo</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tg-section-name2">
						<h2>Mejores Jugadores</h2>
					</div>
				</div>
			</section>
			<!--************************************
					Top Rated Player End
			*************************************-->
			<!--************************************
					Points Table Start
			*************************************-->
			<section class=" tg-haslayout tg-bgstyletwo">
				<div class="tg-bgboxone"></div>
				<div class="tg-bgboxtwo"></div>
				<div class="tg-bgpattrant">
					<div class="container">
						<div class="row">
							<div class="tg-pointstablewrapper">
								<div class="col-sm-8 col-xs-12">
									<div class="tg-pointstable">
										<div class="tg-section-heading"><h2>Tabla de Puntos</h2></div>
										<div id="tg-pointstable-slider" class="tg-pointstable-slider">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<div class="tg-pointtable">
														<div class="tg-box">Pink Dragons</div>
														<div class="tg-box">w 1</div>
														<div class="tg-box">d 0</div>
														<div class="tg-box">l 1</div>
														<div class="tg-box">pt 2</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-pointtable">
														<div class="tg-box">Red Wolves</div>
														<div class="tg-box">w 1</div>
														<div class="tg-box">d 0</div>
														<div class="tg-box">l 1</div>
														<div class="tg-box">pt 2</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-pointtable">
														<div class="tg-box">Pink Dragons</div>
														<div class="tg-box">w 1</div>
														<div class="tg-box">d 0</div>
														<div class="tg-box">l 1</div>
														<div class="tg-box">pt 2</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-pointtable">
														<div class="tg-box">Big jaw lion</div>
														<div class="tg-box">w 1</div>
														<div class="tg-box">d 0</div>
														<div class="tg-box">l 1</div>
														<div class="tg-box">pt 2</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-pointtable">
														<div class="tg-box">Pink Dragons</div>
														<div class="tg-box">w 1</div>
														<div class="tg-box">d 0</div>
														<div class="tg-box">l 1</div>
														<div class="tg-box">pt 2</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-pointtable">
														<div class="tg-box">Red Wolves</div>
														<div class="tg-box">w 1</div>
														<div class="tg-box">d 0</div>
														<div class="tg-box">l 1</div>
														<div class="tg-box">pt 2</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-pointtable">
														<div class="tg-box">Pink Dragons</div>
														<div class="tg-box">w 1</div>
														<div class="tg-box">d 0</div>
														<div class="tg-box">l 1</div>
														<div class="tg-box">pt 2</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-pointtable">
														<div class="tg-box">Red Wolves</div>
														<div class="tg-box">w 1</div>
														<div class="tg-box">d 0</div>
														<div class="tg-box">l 1</div>
														<div class="tg-box">pt 2</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-pointtable">
														<div class="tg-box">Pink Dragons</div>
														<div class="tg-box">w 1</div>
														<div class="tg-box">d 0</div>
														<div class="tg-box">l 1</div>
														<div class="tg-box">pt 2</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-pointtable">
														<div class="tg-box">Big jaw lion</div>
														<div class="tg-box">w 1</div>
														<div class="tg-box">d 0</div>
														<div class="tg-box">l 1</div>
														<div class="tg-box">pt 2</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-pointtable">
														<div class="tg-box">Pink Dragons</div>
														<div class="tg-box">w 1</div>
														<div class="tg-box">d 0</div>
														<div class="tg-box">l 1</div>
														<div class="tg-box">pt 2</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="tg-pointtable">
														<div class="tg-box">Red Wolves</div>
														<div class="tg-box">w 1</div>
														<div class="tg-box">d 0</div>
														<div class="tg-box">l 1</div>
														<div class="tg-box">pt 2</div>
													</div>
												</div>
											</div>
											<div class="tg-themebtnnext"><span class="fa fa-angle-down"></span></div>
											<div class="tg-themebtnprev"><span class="fa fa-angle-up"></span></div>
										</div>
										<div class="tg-btnbox">
											<a class="tg-btn" href="views/resultados.html"><span>Ver Todo</span></a>
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-12 hidden-xs">
									<figure>
										<img src="fotos real pasion/foto2.jpg" alt="image description">
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Points Table End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-haslayout tg-footerinfobox">
				<div class="tg-bgboxone"></div>
				<div class="tg-bgboxtwo"></div>
				<div class="tg-footerinfo">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<div class="tg-footercol">
									<div class="tg-posttitle">
										<h3>Suscribirse</h3>
									</div>
									<div class="tg-description">
										<p>Adipisicing elit, sed do eiusmod tempor incidunta utiai labore et dolore magna si aliqua quis.</p>
									</div>
									<form class="tg-form-newsletter">
										<fieldset>
											<div class="form-group">
												<input type="email" class="form-control" name="email" placeholder="Email">
											</div>
											<button class="tg-btn" type="submit">Suscribirse</button>
										</fieldset>
									</form>
								</div>
							</div>
							<div class="col-sm-4">
								
							</div>
							<div class="col-sm-4">
								<div class="tg-footercol">
									<div class="tg-haslayout">
									</div>
									<div class="tg-description">
										<p>Consectetur adipisicing elit sedtado eiusmod dunt ut labore et dolore magna aliqua enim minim veniami quis nostrud.</p>
									</div>
									<ul class="tg-contactinfo">
										<li>
											<i class="fa fa-home"></i>
											<address>Funza, Cundinamarca</address>
										</li>
										<li>
											<i class="fa fa-envelope-o"></i>
											<a href="info%40domain.html">realpasion@gmail.com</a>
										</li>
										<li>
											<i class="fa fa-phone"></i>
											<span>+57 312 456 788 - 9</span>
										</li>
									</ul>
									<div class="tg-haslayout">
										<a class="tg-btn" href="views/contacto.html">Leer mas</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!--************************************
			Search Start
	*************************************-->
	<div class="tg-searchbox">
		<a id="tg-cPerdio-search" class="tg-cPerdio-search" href="javascript:void(0)"><span class="fa fa-cPerdio"></span></a>
		<div class="tg-searcharea">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<form class="tg-form-search">
							<fieldset>
								<input type="search" class="form-control" placeholder="Que deseas buscar? :)">
								<i class="icon-icon_search2"></i>
							</fieldset>
						</form>
						<p>Escribe y presiona ENTER para buscar</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
			Search End
	*************************************-->
	<!--************************************
		LightBoxes Start
	*************************************-->
	<div class="tg-modalbox modal fade" id="tg-login" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="tg-modal-content">
				<div class="tg-formarea">
					<div class="tg-border-heading">
						<h3>Iniciar Sesion</h3>
					</div>
					<form class="tg-loginform" action="php/login_usuario_be.php" method="POST">
						<fieldset>
							<div class="form-group">
								<input type="text" name="usuario/email" class="form-control" placeholder="Usuario/email">
							</div>
							<div class="form-group">
								<input type="password" name="contrasena" class="form-control" placeholder="Contraseña">
							</div>
							<div class="form-group">
								<label>
									<input type="checkbox" value="rememberme" class="checkbox">
									<em>Recordarme</em>
								</label>
								<a href="#">
									<em>Olvide la contraseña?</em>
									<i class="fa fa-question-circle"></i>
								</a>
							</div>
							<div class="form-group">
								<button class="tg-btn tg-btn-lg" type="submit">Iniciar Sesion</button>
							</div>
							<div class="tg-description">
								<p>No tienes una cuenta? <a href="#" id="open-register">registrarse</a></p>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="tg-logintype">
					<div class="tg-border-heading">
						<h3>Iniciar Sesion con</h3>
					</div>
					<ul>
						<li class="tg-facebook"><a href="#">facebook</a></li>
						<li class="tg-twitter"><a href="#">twitter</a></li>
						<li class="tg-googleplus"><a href="#">google+</a></li>
						<li class="tg-linkedin"><a href="#">linkedin</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="tg-modalbox modal fade" id="tg-register" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="tg-modal-content">
				<div class="tg-formarea">
					<div class="tg-border-heading">
						<h3>Registrarse</h3>
					</div>
					<form class="tg-loginform" action="php/registro_usuario_be.php" method="POST">
						<fieldset>
							<div class="form-group">
								<input type="text" name="nombre" class="form-control" placeholder="Nombre">
							</div>
							<div class="form-group">
								<input type="text" name="apellido" class="form-control" placeholder="Apellido">
							</div>
							<div class="form-group">
								<input type="text" name="usuario" class="form-control" placeholder="Usuario">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Correo Electronico">
							</div>
							<div class="form-group">
								<input type="password" name="contrasena" class="form-control" placeholder="Contraseña">
							</div>
							<div class="form-group">
								<button class="tg-btn tg-btn-lg" type="submit">Registrase ahora</button>
							</div>
							<div class="tg-description">
								<p>Ya tienes una cuenta? <a href="#" id="open-login">Iniciar Sesion</a></p>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="tg-logintype">
					<div class="tg-border-heading">
						<h3>Registrarse con</h3>
					</div>
					<ul>
						<li class="tg-facebook"><a href="#">facebook</a></li>
						<li class="tg-twitter"><a href="#">twitter</a></li>
						<li class="tg-googleplus"><a href="#">google+</a></li>
						<li class="tg-linkedin"><a href="#">linkedin</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--************************************
		LightBoxes End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/customScrollbar.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/isotope.pkgd.js"></script>
	<script src="js/prettyPhoto.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/main.js"></script>

	<script src="//code.tidio.co/nhfggu2yxeisadsifatulya4kgrzmlot.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"
        integrity="sha512-gmwBmiTVER57N3jYS3LinA9eb8aHrJua5iQD7yqYCKa5x6Jjc7VDVaEA0je0Lu0bP9j7tEjV3+1qUm6loO99Kw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
	<script src="js/tempo.js"></script>
</body>

</html>
