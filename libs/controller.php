<?php

namespace iepsanluis\libs\controller;

use iepsanluis\libs\view\View;

class Controller
{
  public $view;
  public $model;
  public $modulo;

  function __construct()
  {
    #echo "<h1>Controlador Base</h1>";
    $this->view = new View();
  }

  function loadModel($model)
  {
    //echo "<h3>entra para cargar el model del modulo</h3>";
    $url = $this->modulo . '/models/' . $model . "model.php";
    if (file_exists($url)) {

      require $url;

      $modelName = $model . 'Model';
      $this->model = new $modelName();
    }
  }
  //IMPORTANTE
  //Esta Funcion solo valida datos, Devuelve true si todos los datos son validos, no modifica los datos pasados
  //Funcion global para que Todos los demas Controladores puedan validar datos
  function validacionDatos($nombre = null, $apellido = null, $direccion = null, $dni = null, $email = null, $telefono = null, $sexo = null, $fecha = null, $descripcion = null, $textos = null, $numeros = null)
  {
    // fecha Formato YYYY-MM-DD
    $patronesValidos = array(
      "caracteres" => "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/",
      "textos" => "/^[A-Za-z0-9ÁÉÍÓÚáéíóúÜüÑñ\s.,;:¡!¿?@#$%^&*()-_+=<>]+$/",
      "dni" => "/^[0-9]{8}$/",
      "email" => "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/",
      "telefono" => "/^[0-9()+-]+$/",
      "fecha" => "/^\d{4}-\d{2}-\d{2}$/",
      "genero" => ["masculino", "femenino"],
      "numeros" => "/^[0-9]+$/",
    );
    // $caracteres = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
    // $caracteresAll = "/^[A-Za-z0-9ÁÉÍÓÚáéíóúÜüÑñ\s.,;:¡!¿?@#$%^&*()-_+=<>]+$/";
    // $numeros = "0123456789";
    //$genero = ['masculino', 'femenino'];
    $validacion = array();
    if ($nombre == !null) {
      $patronCoincidencia = preg_match($patronesValidos['caracteres'], $nombre);
      if ($patronCoincidencia && strlen($nombre) < 50) {
        $validacion["nombre"] = true;
      } else {
        $validacion["nombre"] = false;
      }
    }
    if ($apellido == !null) {
      $patronCoincidencia = preg_match($patronesValidos['caracteres'], $apellido);
      if ($patronCoincidencia && strlen($apellido) < 100) {
        $validacion["apellido"] = true;
      } else {
        $validacion["apellido"] = false;
      }
    }
    if ($direccion == !null) {
      $patronCoincidencia = preg_match($patronesValidos['textos'], $direccion);
      if ($patronCoincidencia && strlen($direccion) < 45) {
        $validacion["direccion"] = true;
      } else {
        $validacion["direccion"] = false;
      }
    }
    if ($dni == !null) {
      $patronCoincidencia = preg_match($patronesValidos['dni'], $dni);
      if ($patronCoincidencia && strlen($dni) < 9) {
        $validacion["dni"] = true;
      } else {
        $validacion["dni"] = false;
      }
    }
    if ($email == !null) {
      $patronCoincidencia = preg_match($patronesValidos['email'], $email);
      if ($patronCoincidencia && strlen($email) < 80) {
        $validacion["email"] = true;
      } else {
        $validacion["email"] = false;
      }
    }
    if ($telefono == !null) {
      $patronCoincidencia = preg_match($patronesValidos['telefono'], $telefono);
      if ($patronCoincidencia && strlen($telefono) < 15) {
        $validacion["telefono"] = true;
      } else {
        $validacion["telefono"] = false;
      }
    }
    if ($sexo == !null) {
      $patronCoincidencia = in_array($sexo, $patronesValidos['genero']);
      if ($patronCoincidencia && strlen($sexo) < 10) {
        $validacion["sexo"] = true;
      } else {
        $validacion["sexo"] = false;
      }
    }
    if ($fecha == !null) {
      $result = is_array($fecha);
      if ($result) {
        for ($i = 0; $i < count($fecha); $i++) {
          // $fechaStr = strtotime($fecha);
          // $anio = date('Y', $fechaStr);
          $patronCoincidencia = preg_match($patronesValidos['fecha'], $fecha[$i]);
          if ($patronCoincidencia) {
            $validacion["fecha" . $i] = true;
          } else {
            $validacion["fecha" . $i] = false;
          }
        }
      } else {
        // $fechaStr = strtotime($fecha);
        // $anio = date('Y', $fechaStr);
        $patronCoincidencia = preg_match($patronesValidos['fecha'], $fecha);
        if ($patronCoincidencia) {
          $validacion["fecha"] = true;
        } else {
          $validacion["fecha"] = false;
        }
      }
    }
    if ($descripcion == !null) {
      $patronCoincidencia = preg_match($patronesValidos['textos'], $descripcion);
      if ($patronCoincidencia && strlen($descripcion) < 200) {
        $validacion["descripcion"] = true;
      } else {
        $validacion["descripcion"] = false;
      }
    }
    if ($textos == !null) {
      $result = is_array($textos);
      if ($result) {
        for ($i = 0; $i < count($textos); $i++) {
          $patronCoincidencia = preg_match($patronesValidos['textos'], $textos[$i]);
          if ($patronCoincidencia && strlen($textos[$i]) < 100) {
            $validacion["texto" . $i] = true;
          } else {
            $validacion["texto" . $i] = false;
          }
        }
      } else {
        $patronCoincidencia = preg_match($patronesValidos['textos'], $textos);
        if ($patronCoincidencia && strlen($textos) < 100) {
          $validacion["texto"] = true;
        } else {
          $validacion["texto"] = false;
        }
      }

    }
    if ($numeros == !null) {
      $result = is_array($numeros);
      if ($result) {
        for ($i = 0; $i < count($numeros); $i++) {
          $patronCoincidencia = preg_match($patronesValidos['numeros'], $numeros[$i]);
          if ($patronCoincidencia && strlen($numeros[$i]) < 20) {
            $validacion["numeros" . $i] = true;
          } else {
            $validacion["numeros" . $i] = false;
          }
        }
      } else {
        $patronCoincidencia = preg_match($patronesValidos['numeros'], $numeros);
        if ($patronCoincidencia && strlen($numeros) < 20) {
          $validacion["numeros"] = true;
        } else {
          $validacion["numeros"] = false;
        }
      }
    }
    // cuenta los valores repetidos de un array- colo debe existir 1: true o false
    $result = count(array_unique(array_values($validacion)));
    //verigica el valor que se repite en el array: solo debe ser entre true y false
    $valorTrue = array_unique(array_values($validacion));
    // echo var_dump($validacion) . "<br>";
    if (in_array(true, $valorTrue) && $result === 1) {
      //echo "bien validado";
      return true;
    } else {
      //echo "validacion incorrecta";
      return false;
    }
  }
  // Los parametros son:
  //FILE=> el archivo subido
  //MODULO=> nombre del modulo(solo nombre)
  //NOMBRE=> nombre del archivo, puede ser nombre del usuario o apellido lo que mejor convenga
  //ID=> un Identificador unico, Id de la base de datos o un numero especial
  function subirFoto($file, $modulo, $nombre, $id)
  {
    // archivo subido, nombre temporal
    $temporal = $file['tmp_name'];
    // La ruta de la carpeta: CARPETA FOTO 'nombre' 'id'
    $rutaCarpeta = $_SERVER['DOCUMENT_ROOT'] . "/iepsanluis" . '/' . $modulo . "/public/img/Foto:" . $nombre . $id;
    //TAMAÑO Y TIPOS DE ARCHIVOS
    $tamanoMaximo = 15 * 1024 * 1024;
    // Extenciones Permitidas
    $archivosPermitidos = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];
    // la extencion del archivo subido
    $extensionArchivo = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    // Verifica si la extencion esta permitida  
    $resultadoExtension = in_array($extensionArchivo, $archivosPermitidos);
    // Verifica si existe la carpeta
    if (file_exists($rutaCarpeta) && !empty($file) && $file['error'] == 0 && $resultadoExtension && $tamanoMaximo >= $file['size']) {
      // Ruta del archivo subido
      $ruta = $rutaCarpeta . '/' . $file['name'];
      // Verifica si se subio el archivo correctamente
      return move_uploaded_file($temporal, $ruta) ? str_replace($_SERVER['DOCUMENT_ROOT'] . '/iepsanluis' . '/' . $modulo, '', $ruta) : false;
    }
    // Verifica al archivo
    if (!empty($file) && $file['error'] == 0 && $resultadoExtension && $tamanoMaximo >= $file['size']) {
      //Crear la carpeta para el usuario en cuestion
      $result = mkdir('Foto:' . $nombre . $id, 0777) ? rename('Foto:' . $nombre . $id, $rutaCarpeta) : false;
      if ($result) {
        // Ruta del archivo subido
        $ruta = $rutaCarpeta . '/' . $file['name'];
        // Verifica si se subio el archivo correctamente
        return move_uploaded_file($temporal, $ruta) ? str_replace($_SERVER['DOCUMENT_ROOT'] . '/iepsanluis' . '/' . $modulo, '', $ruta) : false;
      } else {
        return false;
      }
    } else {
      return "El tamano es incorrecto o la extencion no es permitida";
    }
  }

}
