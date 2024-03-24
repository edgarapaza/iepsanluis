<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <!-- FOUNDATION CSS-PRINCIPAL Y NECESARIO -->
    <link rel="stylesheet" href="http://localhost/iepsanluis/admin/public/css/foundation.css">
    <!-- FOUNDATION FLOAT -->
    <link rel="stylesheet" href="http://localhost/iepsanluis/admin/public/css/foundation-float.css">
    <!-- Foundation prototipe-algunas interesantes opciones a utilizar-->
    <link rel="stylesheet" href="http://localhost/iepsanluis/admin/public/css/foundation-prototype.css">
    <!-- CHARTJS-GRAFICOS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
    <!-- ICONOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- CSS->DASHBOARD -->
    <link rel="stylesheet" href="http://localhost/iepsanluis/admin/public/css/sidebar.css">
</head>

<body>
    <div class="off-canvas-wrapper">
        <div class="off-canvas position-left reveal-for-large sidebar-z" id="offCanvas" data-off-canvas>
            <div class="grid-container nav-z">
                <div class="grid-x align-center margin-top-1">
                    <img class="shadow" src="<?php echo constant('URLADMIN') . 'public/img/katariwhite.png' ?>"
                        alt="katari" width="60%">
                </div>
                <hr>
                <div class="grid-x">
                    <div class="cell">
                        <ul class="vertical menu">
                            <li>
                                <a href="#">
                                    <i class="fas fa-house"></i>
                                    <span class="nav-item">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                    <span class="nav-item">Docentes</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-user"></i>
                                    <span class="nav-item">Estudiantes</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-person"></i>
                                    <span class="nav-item">Personal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-book-open"></i>
                                    <span class="nav-item">Cursos</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-book"></i>
                                    <span class="nav-item">Registros</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-person-breastfeeding"></i>
                                    <span class="nav-item">Padres</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-calendar"></i>
                                    <span class="nav-item">Eventos</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="cell margin-top-3">
                        <ul class="vertical menu">
                            <li>
                                <a href="#">
                                    <i class="fas fa-gears"></i>
                                    <span class="nav-item">Configuracion</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo constant('URLADMIN'); ?>login/salir">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span class="nav-item">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="off-canvas-content" data-off-canvas-content>
            <div class="title-bar hide-for-large">
                <div class="title-bar-left">
                    <button type="button" class="menu-icon" data-toggle="offCanvas">
                    </button>
                    <span class="title-bar-title">Admin Panel</span>
                </div>
            </div>
