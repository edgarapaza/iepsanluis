<?php
namespace iepsanluis\libs\view;
class View
{
  public $mensaje;
  public $modulo;
  public $datos;

  function __construct()
  {
    //$this->datos;
  }

  function Render($nombre)
  {
    require $this->modulo.'/views/' . $nombre . '.php';
  }
}
