<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IPE San Luis Ilo</title>
<<<<<<< HEAD
  <!-- Compressed CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.8.1/dist/css/foundation.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>main/public/css/header.css">
  <!-- If you are using the gem version, you need this only -->

  <!-- Insert this within your head tag and after foundation.css -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@200;400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
=======
      <!-- FOUNDATION CSS-PRINCIPAL Y NECESARIO -->
	<link rel="stylesheet" href="<?php echo constant('URLMAIN') .'public/css/foundation.css' ?>">
	<!-- FOUNDATION FLOAT -->
	<link rel="stylesheet" href="<?php echo constant('URLMAIN') .'public/css/foundation-float.css' ?>">
	<!-- Foundation prototipe-algunas interesantes opciones a utilizar-->
	<link rel="stylesheet" href="<?php echo constant('URLMAIN') .'public/css/foundation-prototype.css' ?>">
    <!-- CHARTJS-GRAFICOS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
    <!-- ICONOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
>>>>>>> fa1110fced5c0e38ee42bb33462bcd9585818e5c

</head>

<body>

  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="cell small-3">
<<<<<<< HEAD
        <a href="<?php echo constant('URL'); ?>main">
          <img src="<?php echo constant('URL'); ?>main/public/img/logo.jpg" alt="Logo IEP San Luis" class="img-logo">
=======
        <a href="<?php echo constant('URLMAIN'); ?>main">
          <img src="<?php echo constant('URLMAIN'); ?>public/img/logo.jpg" alt="Logo IEP San Luis" class="img-logo">
>>>>>>> fa1110fced5c0e38ee42bb33462bcd9585818e5c
        </a>
      </div>
      <div class="cell small-9" style="background-image: url('<?php echo constant('URL'); ?>main/public/img/menu.png') ;">
        <nav class="navegador">
          <ul>
            <li><a href="<?php echo constant('URLMAIN'); ?>main">Inicio</a></li>
            <li><a href="<?php echo constant('URLMAIN'); ?>nosotros">Nosotros</a></li>
            <li><a href="<?php echo constant('URLMAIN'); ?>propuesta">Propuesta educativa</a></li>
            <li><a href="<?php echo constant('URLMAIN'); ?>galeria">Galeria</a></li>
            <li class="activate"><a href="<?php echo constant('URLMAIN'); ?>contacto">
                <i class="fa-solid fa-phone"></i>
                Contacto
              </a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>