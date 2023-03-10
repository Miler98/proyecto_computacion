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
			<nav>
				<a href="#" class="activo">Inicio</a>
				<a href="peliculas/index.html"><span class="material-symbols-outlined lead mr-2">shopping_cart</span>Mi Carrito</a>

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
	</main>
	
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="tus_peliculas/js/main.js"></script>
    <script src="scripts/perfil.js"></script>
</body>
</html>