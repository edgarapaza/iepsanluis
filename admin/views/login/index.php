<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php echo constant('URLADMIN') . 'public/img/favicon.ico' ?>">
  <!-- CSS-LOGIN -->
  <link rel="stylesheet" href="<?php echo constant('URLADMIN') . 'public/css/login.css' ?>">
  <!-- FOUNDATION CSS-PRINCIPAL Y NECESARIO -->
  <link rel="stylesheet" href="<?php echo constant('URLADMIN') . 'public/foundation/css/foundation.css' ?>">
  <!-- FOUNDATION FLOAT -->
  <link rel="stylesheet" href="<?php echo constant('URLADMIN') . 'public/foundation/css/foundation-float.css' ?>">
  <!-- Foundation prototipe-algunas interesantes opciones a utilizar-->
  <link rel="stylesheet" href="<?php echo constant('URLADMIN') . 'public/foundation/css/foundation-prototype.css' ?>">
  <!-- ICONOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body>
  <div class="grid-container full">
    <div class="grid-x grid-margin-x">
      <div class="cell small-12 medium-12 large-5">
        <div class="form margin-3 padding-3">
          <div class="cell margin-top-3 margin-bottom-2">
            <h1>Bienvenidos</h1>
            <p>Ingrese su usuario y contrasena</p>
          </div>
          <div class="cell padding-top-3">

            <form action="http://localhost/iepsanluis/admin/login/user" method="POST" class="form-z">
              <div class="input-box">
                <span class="icon"><i class="fas fa-user"></i></span>
                <input class="form-control margin-bottom-2" type="text" name="usuario" placeholder="Usuario" value="admin">
              </div>
              <div class="input-box">
                <span class="icon"><i class="fas fa-eye-slash"></i></span>
                <input class="form-control margin-bottom-1" type="password" name="password" placeholder="Password" value="admin">
              </div>
              <div class="cell text-right margin-bottom-2">
                <a href="#">¿Olvidaste tu contraseña?</a>
              </div>
              <button type="submit" name="submit" class="btn rounded bordered shadow success">Ingresar</button>
            </form>
            <hr>
            <div class="cell text-center">
              <p class="lead">No tienes una cuenta?</p>
              <a href="">Registrate</a>
            </div>
          </div>
          <div class="cell img-k margin-top-1">
            <div class="cell">
              <img src="http://localhost/iepsanluis/admin/public/img/tile-wide.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="cell large-7 show-for-large img-z">
        <img class="hide-for-small-only" src="http://localhost/iepsanluis/admin/public/img/colegio-login.png">
      </div>
    </div>
  </div>
  <!-- <div class="row">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque odio aut veritatis debitis nesciunt officia voluptates alias, praesentium ut hic! Nulla laboriosam consequuntur excepturi explicabo dicta iusto delectus quis at?
	</div> -->
</body>

</html>