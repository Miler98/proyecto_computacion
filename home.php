<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: index.html");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap, iconos -->
    <script src="https://kit.fontawesome.com/71b9e775fc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="styles.css">
    <title>Linio</title>
</head>
<body>
    <header>
        <!-- imagen del menu hamburguesa-->
        <div class="icono-menu">
            <img src="menu1.png" id="icono-menu">
        </div>
        <!-- contenido del menu hamburguesa-->
        <div class="cont-menu active" id="menu">
            <ul>
                <li> Tiendas Oficiales</li>
                <li> Celulares y accecsorios</li>
                <li> Tv, audio y video </li>
                <li> Computación </li>
                <li> Consolas y videojuegos</li>
                <li> Electrodomésticos </li>
                <li> Hogar</li>
                <li> Ferreteria y automotriz</li>
                <li> Moda y accesorios</li>
                <li> Supermercado y mascotas</li>
                <li> Deportes</li>
                <li> Belleza</li>
                <li> Salud y bienestar</li>
            </ul>
        </div>
        <!--Logo de linio-->
        <div class="logo">
            <img src="Logo-co.png" alt="">
        </div>
        <!--se implementa el buscador y la imagen de buscar-->
        <div class="buscar">
            <input class="search-bar" type="text" placeholder="Buscar productos">
            <a href="" class="boton">
                <i class="icon-buscar"></i>
            </a>   
        </div>
        <!--botones de navegacion con sus espectivos iconos de Google fonts-->
        <div class="container cont-boton">
            <button class="este"><span class="material-symbols-outlined lead mr-2">account_circle</span> <a href="index.html"> Inicia sesión</a></button>
            <button class="este">|</button>
            <button class="este"><span class="material-symbols-outlined lead mr-2">local_shipping</span>Mis pedidos</button>
            <button class="este">|</button>
            <button class="este"><span class="material-symbols-outlined lead mr-2">shopping_cart</span>Carrito</button>
        </div>  
        
    </header>
    <!--Segundo navbar-->
    <nav class="border-top border-secondary retraer cont-boton">
        <button class="botonnav">Solo Hoy</button>
        <button class="botonnav">Solo Para Ti</button>
        <button class="botonnav">Tiendas Oficiales</button>
        <button class="botonnav">Vende en Linio</button>
        <button class="botonnav">Ayuda</button>
        <button class="botonnav">Historial</button>
        <button class="botonnav">Banco Falabella</button>
        <button class="botonnav">Falabella</button>
        <button class="botonnav">Ventas Telefónicas</button>
    </nav>
    <script src="header.js"></script>
</body>
</html>