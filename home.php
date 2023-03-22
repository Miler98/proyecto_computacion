<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: /tus_peliculas/index.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="/proyecto_computacion/css/estilos1.css">
	<link rel="stylesheet" href="tus_peliculas/css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	<title>Tus_peliculas</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<h2 class="logotipo">Tus Películas</h2>
			<form class="search-bar">
				<input type="text" placeholder="Buscar películas o series" name="q">
				<button type="submit"><img class="imagen" src="tus_peliculas/img/search.png" alt=""></button>
			</form>
			<nav>
				<a href="#" class="activo">Inicio</a>
				<a href="tus_peliculas/login_pelicula.html"><span class="material-symbols-outlined lead mr-2"></span>Películas</a>
				<a href="tus_peliculas/login_serie.html"><span class="material-symbols-outlined lead mr-2"></span>Series</a>
				<div class="usuario">
                    <button class="btndesplegar" id="btn-perfil"></button>
                    <div class="contenido" id="contenido-perfil" style="display:none;">
                        <p> <?= $_SESSION['infouser'] ?> </p>
                        <hr>
                        <a href="DB/cerrar_sesion.php">
                        <i class="fas fa-sign-in-alt text-color"></i> Salir</a>
                    </div>
                </div>
			</nav>
		</div>
	</header>

	<main>
		<div class="pelicula-principal">
			<div class="contenedor">
				<h3 class="titulo">Interestellar</h3>
				<p class="descripcion">
					Narra las aventuras de un grupo de exploradores que hacen uso de un agujero de gusano recientemente descubierto para superar las limitaciones de los viajes espaciales tripulados y vencer las inmensas distancias que tiene un viaje interestelar.
				</p>
				<button role="button" class="boton"><i class="fas fa-play"></i>Reproducir</button>
				<button role="button" class="boton"><i class="fas fa-info-circle"></i>Más información</button>
			</div>
		</div>

		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Películas Recomendadas</h3>
				<div class="indicadores"></div>
			</div>

			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

				<div class="contenedor-carousel">
					<div class="carousel">
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/4.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/5.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/6.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/7.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/4.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/5.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/6.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/7.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/1.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/2.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/3.png" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/4.png" alt=""></a>
						</div>
					</div>
				</div>

				<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
			</div>
		</div>
		<div class="peliculas-recomendadas contenedor">
			<div class="contenedor-titulo-controles">
				<h3>Series Recomendadas</h3>
				<div class="indicadores"></div>
			</div>
			<div class="contenedor-principal">
				<button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>
				<div class="contenedor-carousel">
					<div class="carousel">
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/30.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/31.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/32.jpg" alt=""></a>
						</div>
						<div class="pelicula">
							<a href="#"><img src="tus_peliculas/img/33.jpg" alt=""></a>
						</div>
					</div>
				</div>
				<button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
			</div>
		</div>
	</main>
	<footer style="background-color: #1b1b1b; padding: 20px;">
		<div class="footer-container">
		  <div class="footer-section">
			<br>
			<ul class="social-icons">
			  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
			  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
			  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
			  <li><a href="#"><i class="fab fa-youtube"></i></a></li>
			</ul>
			<br>
			<ul class="social-foo">
				<a> Quienes somos</a>
				<a> Preguntas frecuentes</a>
				<a> Contacto</a>
			  </ul>
			<br>
			<p class="derechos">© 2023 Tus Películas. Todos los derechos reservados.</p>
		  </div>
		</div>
	  </footer>
	  
	  <style>
		.search-bar{
		background: rgba(68, 68, 68, 0.2);
		display: flex;
		align-items: center;
		border-radius: 50px;
		padding: 5px 35px;
		backdrop-filter: blur(4px) saturate(180%);
		}
		.search-bar input{
		background: transparent;
		flex: 1;
		border: 0;
		outline: none;
		padding: 10px 20px;
		font-size: 16px;
		color: #cac7ff;
		}
		::placeholder{
			color: #63636d8f;
		}
		.search-bar button{
			border: 0;
			border-radius: 50%;
			width: 33px;
			height: 33px;
			background: #e4091475;
			cursor: pointer;
		}
		.imagen{
			width: 20px;
			height: 20px;
		}
		.footer-container {
		  display: flex;
		  justify-content: center;
		  flex-wrap: wrap;
		}
		.footer-section {
		  flex: 1;
		  margin: 0 10px;
		}
		.footer-section h3 {
		  color: white;
		}
		.social-icons {
		  list-style: none;
		  padding: 0;
		  display: flex;
		  justify-content: center;
		}
		.social-icons li {
		  margin-right: 18px;
		}
		.social-icons a {
		  color: antiquewhite;
		  font-size: 30px;
		}
		.social-icons a:hover {
		  color: #e40914;
		}
		.social-foo {
		  list-style: none;
		  padding: 0;
		  display: flex;
		  justify-content: center;
		}
		.social-foo a {
		  color: #aaa;
		  font-size: 15px;
		  margin-right: 40px;
		}
		.social-foo a:hover{
    		color: rgb(255, 255, 255);
		}
		.derechos{
			color: #aaa;
			display: flex;
			font-size: 15px;
			justify-content: center;
			align-content: center;
			align-items: center;
			align-self: center;
		}
	  </style>
	<!-- Importa Font Awesome para los iconos -->
	<script src="https://kit.fontawesome.com/71b9e775fc.js" crossorigin="anonymous"></script>
	<script src="js/main.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="tus_peliculas/js/main.js"></script>
    <script src="scripts/perfil.js"></script>
</body>
</html>