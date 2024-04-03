<?php
class View
{
  public $mensaje;
  public $datos;

  function __construct()
  {
    #echo "<h1>View Base</h1>";
  }

  function render($nombre)
  {
    $rol = $_SESSION['rol'];
    if (empty($rol)) {
      require 'web/views/' . $nombre . '.php';
    }else{
      require $rol.'/views/' . $nombre . '.php';
    }
  }

}
