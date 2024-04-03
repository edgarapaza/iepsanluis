<?php

session_start();

class App{

  function __construct(){

    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);

    if(empty($url[0])){
      #echo "No hay valor en la URL, lo redirege al index de la carpeta Web";
      $archivoMain = "web/controller/main.php";

      if(file_exists($archivoMain)){
        require_once $archivoMain;
        $controller = new Main();
        $controller->render();
        session_destroy();
      }

    }else{
      #echo "Con valor";

    }
  }

  function Admin($url){
      #echo "<p>Admin</p>";
      $url = $_GET['url'];
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      var_dump($url);


      echo $archivoController = "admin/controller/" . $url[0] . ".php";

      if (file_exists($archivoController)) {
        #echo "Si existe";
        $_SESSION['rol'] = 'admin';
        require_once $archivoController;
        $controller = new $url[0];
        $controller->loadModel($url[0]);

        # numero de elementos del arreglo
        $nparam = sizeof($url);

        if ($nparam > 1) {
          if ($nparam > 2) {
            $param = [];
            for ($i = 2; $i < $nparam; $i++) {
              array_push($param, $url[$i]);
            }
            $controller->{$url[1]}($param);
          } else {
            $controller->{$url[1]}();
          }
        } else {
          $controller->render();
        }
      } else {
        #echo "no existe";
        require "admin/controller/error.php";
        $controller = new ErrorGeneral();
        $controller->render();
      }

      echo "<p>Debe mostrar login de acceso</p>";
      echo "<p>Devolver usuario y contraseña y datos del Administrado</p>";
      echo "<p>Crear session de Administrador</p>";
      echo "<p>Redigiri al modulo de Administrador</p>";
  }

  function Docentes($url){
      #echo "<p>Docentes</p>";
      $url = $_GET['url'];
      $url = rtrim($url, '/');
      $url = explode('/', $url);

       $archivoController = "docentes/controller/" . $url[0] . ".php";

      if (file_exists($archivoController)) {
        #echo "Si existe";
        $_SESSION['rol'] = 'docentes';
        require_once $archivoController;
        $controller = new $url[0];
        $controller->loadModel($url[0]);

        # numero de elementos del arreglo
        $nparam = sizeof($url);

        if ($nparam > 1) {
          if ($nparam > 2) {
            $param = [];
            for ($i = 2; $i < $nparam; $i++) {
              array_push($param, $url[$i]);
            }
            $controller->{$url[1]}($param);
          } else {
            $controller->{$url[1]}();
          }
        } else {
          $controller->render();
        }
      } else {
        #echo "no existe";
        require "docentes/controller/error.php";
        $controller = new ErrorGeneral();
        $controller->render();
      }

      echo "<p>Debe mostrar login de acceso</p>";
      echo "<p>Devolver usuario y contraseña y datos del Docente</p>";
      echo "<p>Crear session de Docente</p>";
      echo "<p>Redigiri al modulo de Docente</p>";
  }

  function Estudiantes($url){
      echo "<p>Estudiantes</p>";
      $url = $_GET['url'];
      $url = rtrim($url, '/');
      $url = explode('/', $url);


      $archivoController = "estudiantes/controller/" . $url[0] . ".php";

      if (file_exists($archivoController)) {
        #echo "Si existe";
        $_SESSION['rol'] = 'estudiantes';
        require_once $archivoController;
        $controller = new $url[0];
        $controller->loadModel($url[0]);

        # numero de elementos del arreglo
        $nparam = sizeof($url);

        if ($nparam > 1) {
          if ($nparam > 2) {
            $param = [];
            for ($i = 2; $i < $nparam; $i++) {
              array_push($param, $url[$i]);
            }
            $controller->{$url[1]}($param);
          } else {
            $controller->{$url[1]}();
          }
        } else {
          $controller->Render();
        }
      } else {
        #echo "no existe";
        require "estudiantes/controller/error.php";
        $controller = new ErrorGeneral();
        $controller->render();
      }


      echo "<p>Debe mostrar login de acceso</p>";
      echo "<p>Devolver usuario y contraseña y datos del Estudiante</p>";
      echo "<p>Crear session de Estudiante</p>";
      echo "<p>Redigiri al modulo de Estudiante</p>";
  }

  function Web(){
  }
}

