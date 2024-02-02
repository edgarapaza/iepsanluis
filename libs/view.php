<?php
namespace iepsanluis\libs\view;
use iepsanluis\config\config;
class View
{
  public $mensaje;
  public $modulo;
  public $datos;

  function __construct()
  {
    #echo "<h1>View Base</h1>";
  }

  function Render($nombre)
  {
    require $this->modulo.'/views/' . $nombre . '.php';
  }
}
