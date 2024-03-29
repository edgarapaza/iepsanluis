<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IPE San Luis Ilo</title>
  <!-- FOUNDATION CSS-PRINCIPAL Y NECESARIO -->
  <link rel="stylesheet" href="<?php echo constant('URLMAIN') . 'public/foundation/css/foundation.css' ?>">
  <!-- FOUNDATION FLOAT -->
  <link rel="stylesheet" href="<?php echo constant('URLMAIN') . 'public/foundation/css/foundation-float.css' ?>">
  <!-- Foundation prototipe-algunas interesantes opciones a utilizar-->
  <link rel="stylesheet" href="<?php echo constant('URLMAIN') . 'public/foundation/css/foundation-prototype.css' ?>">
  <!-- CHARTJS-GRAFICOS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
  <!-- ICONOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

</head>

<body>

  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="cell small-3">
        <a href="<?php echo constant('URLMAIN'); ?>main">
          <img src="<?php echo constant('URLMAIN'); ?>public/img/logo.jpg" alt="Logo IEP San Luis" class="img-logo">
        </a>
      </div>
      <div class="cell small-9" style="background-image: url('<?php echo constant('URL'); ?>public/img/menu.png') ;">
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
