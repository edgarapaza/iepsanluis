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
    $url = $this->modulo.'/models/' . $model . "model.php";
    if (file_exists($url)) {

      require $url;

      $modelName = $model . 'Model';
      $this->model = new $modelName();
    }
  }

      //IMPORTANTE
    //Esta Funcion solo valida datos, Devuelve true si todos los datos son validos, no modifica los datos pasados
    //Funcion global para que Todos los demas Controladores puedan validar datos
    function validacionDatos($nombre = null, $apellido = null, $direccion = null, $dni = null, $email = null, $telefono = null, $sexo = null, $fecha = null, $descripcion = null, $texto = null, $numeros = null)
    {
        // fecha Formato YYYY-MM-DD
        $patronesValidos = array(
            "caracteres" => "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/",
            "textos" => "/^[A-Za-z0-9ÁÉÍÓÚáéíóúÜüÑñ\s.,;:¡!¿?@#$%^&*()-_+=<>]+$/",
            "dni" => "/^[0-9]{8}$/",
            "email" =>  "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/",
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
            $fechaStr = strtotime($fecha);
            $anio = date('Y', $fechaStr);
            $patronCoincidencia = preg_match($patronesValidos['fecha'], $fecha);
            if ($patronCoincidencia) {
                $validacion["fecha"] = true;
            } else {
                $validacion["fecha"] = false;
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
        if ($texto == !null) {
            $patronCoincidencia = preg_match($patronesValidos['textos'], $texto);
            if ($patronCoincidencia && strlen($texto) < 100) {
                $validacion["texto"] = true;
            } else {
                $validacion["texto"] = false;
            }
        }
        if ($numeros == !null) {
            $patronCoincidencia = preg_match($patronesValidos['numeros'], $numeros);
            if ($patronCoincidencia && strlen($numeros) < 20) {
                $validacion["numeros"] = true;
            } else {
                $validacion["numeros"] = false;
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
}
