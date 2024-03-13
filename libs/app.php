<?php
session_start();
class App
{
  function __construct()
  {
    $url = $_GET['url'];
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    $modulosDisponibles = array(
      "main", "estudiantes", "docentes", "admin"
    );
    // Verifica si hay un módulo especificado en la URL
    $modulo = (!empty($url[0])) ? $url[0] : 'main';
    if (empty($url[0]) && $modulo == "main") {
      $urlObject = "main";
      $this->cargarModulo($modulo, $url, $urlObject);
    }
    if (!empty($url[0]) && $modulo == "main") {
      $urlObject = "main";
      $this->cargarModulo($modulo, $url, $urlObject);
    }
    if (!in_array($modulo, $modulosDisponibles)) {
      $archivoError = "main/controller/error.php";
      // Controlador no encontrado en el módulo, manejar error
      require_once($archivoError);
      $controller = new ErrorGeneral();
      $controller->view->modulo = "main";
      $controller->render();
    }
    /*Si no tiene SESION no entra y se va a su login correspondiente*/
    if ($_SESSION['sessionActiva']) {
      switch ($_SESSION["sessionActiva"]) {
        case "admin":
          if ($_SESSION['sessionActiva'] == "admin" && $modulo == "admin") {
            $this->cargarModulo($modulo, $url, $urlObject);
          } else {
            $archivoController = "{$modulo}/controller/login.php";
            $urlObject = "login";
            $this->cargarController($archivoController, $modulo, $url, $urlObject);
          }
          break;
        case "estudiantes":
          if ($_SESSION['sessionActiva'] == "estudiantes" && $modulo == "estudiantes") {
            $this->cargarModulo($modulo, $url, $urlObject);
          } else {
            $archivoController = "{$modulo}/controller/login.php";
            $urlObject = "login";
            $this->cargarController($archivoController, $modulo, $url, $urlObject);
          }
          break;
        case "docentes":
          if ($_SESSION['sessionActiva'] == "docentes" && $modulo == "docentes") {
            $this->cargarModulo($modulo, $url, $urlObject);
          } else {
            $archivoController = "{$modulo}/controller/login.php";
            $urlObject = "login";
            $this->cargarController($archivoController, $modulo, $url, $urlObject);
          }
          break;
        default:
          $archivoController = "{$modulo}/controller/login.php";
          $urlObject = "login";
          $this->cargarController($archivoController, $modulo, $url, $urlObject);
          break;
      }
    } else {
      if (!empty($url[0]) && sizeof($url) == 1) {
        $archivoController = "{$modulo}/controller/login.php";
        $urlObject = "login";
        $this->cargarController($archivoController, $modulo, $url, $urlObject);
      }
      if (isset($url[2]) && $url[2] == "user") {
        $archivoController = "{$modulo}/controller/login.php";
        $urlObject = "login";
        $this->cargarController($archivoController, $modulo, $url, $urlObject);
      } else {
        header("location: " . constant('URL'));
      }
    }
  }
  function cargarModulo($modulo, $url, $urlObject)
  {
    if (empty($url[1])) {
      $archivoController = "{$modulo}/controller/main.php";
      $urlObject = "main";
    } else {
      $archivoController = "{$modulo}/controller/{$url[1]}.php";
      $urlObject = $url[1];
    }
    switch ($modulo) {
      case "admin":
        /* con function router */
        $this->cargarController($archivoController, $modulo, $url, $urlObject);
        break;
      case "estudiantes":
        $this->cargarController($archivoController, $modulo, $url, $urlObject);
        break;
      case "docentes":
        $this->cargarController($archivoController, $modulo, $url, $urlObject);
        break;
      case "main":
        $this->cargarController($archivoController, $modulo, $url, $urlObject);
        break;
      default:
        require_once("main/controller/main.php");
        $controller = new main();
        $controller->view->modulo = 'main';
        $controller->render();
        break;
    }
  }
  function cargarController($archivoController, $modulo, $url, $urlObject)
  {
    if (file_exists($archivoController)) {
      require_once($archivoController);
      $controller = new $urlObject;
      $controller->view->modulo = $modulo;
      $controller->modulo = $modulo;
      /*verificar los metodos para manejar errores*/
      $metodosPublicos = get_class_methods($urlObject);
      if (!empty($url[2]) && !in_array($url[2], $metodosPublicos)) {
        $archivoError = "{$modulo}/controller/error.php";
        // Controlador no encontrado en el módulo, manejar error
        require_once($archivoError);
        $controller = new ErrorGeneral();
        $controller->view->modulo = $modulo;
        $controller->render();
      }
      if (!empty($url[2]) && isset($url[2])) {
        $controller->loadModel($url[1]);
        $nparam = sizeof($url);
        if ($nparam > 2) {
          if ($nparam > 3) {
            $param = [];
            for ($i = 3; $i < $nparam; $i++) {
              array_push($param, $url[$i]);
            }
            $controller->{$url[2]}($param);
          } else {
            $controller->{$url[2]}();
          }
        } else {
          $controller->render();
        }
      } else {
        $controller->render();
      }
    } else {
      $archivoError = "{$modulo}/controller/error.php";
      // Controlador no encontrado en el módulo, manejar error
      require_once($archivoError);
      $controller = new ErrorGeneral();
      $controller->view->modulo = $modulo;
      $controller->render();
    }
  }
}
