<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IPE San Luis Ilo</title>
  <!-- FOUNDATION CSS-PRINCIPAL Y NECESARIO -->
  <link rel="stylesheet" href="<?php echo constant('URLWEB') . 'public/css/foundation.css' ?>">
  <!-- FOUNDATION FLOAT -->
  <link rel="stylesheet" href="<?php echo constant('URLWEB') . 'public/css/foundation-float.css' ?>">
  <!-- Foundation prototipe-algunas interesantes opciones a utilizar-->
  <link rel="stylesheet" href="<?php echo constant('URLWEB') . 'public/css/foundation-prototype.css' ?>">

  <!-- mi CSS personal -->
  <link rel="stylesheet" href="<?php echo constant('URLWEB') . 'public/css/header.css' ?>">
</head>


<body>

  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="cell small-3">

        <img src="<?php echo constant('URLWEB'); ?>public/img/logo.jpg" alt="Logo IEP San Luis" class="img-logo">

      </div>
      <div class="cell small-9" style="background-image: url('<?php echo constant('URLWEB'); ?>public/img/menu.png') ;">
        <nav class="navegador">
          <ul>
            <li><a href="<?php echo constant('URLWEB'); ?>main">Inicio</a></li>
            <li><a href="<?php echo constant('URLWEB'); ?>nosotros">Nosotros</a></li>
            <li><a href="<?php echo constant('URLWEB'); ?>propuesta">Propuesta educativa</a></li>
            <li><a href="<?php echo constant('URLWEB'); ?>galeria">Galeria</a></li>
            <li class="activate"><a href="<?php echo constant('URLWEB'); ?>contacto">
                <i class="fa-solid fa-phone"></i>
                Contacto
              </a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
