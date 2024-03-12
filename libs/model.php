<?php
namespace iepsanluis\libs\model;

use iepsanluis\libs\conexion\Conexion;
class Model
{
  protected $conn;
  function __construct()
  {
    echo "<h5>Model Base</h5>";
    $this->conn = new Conexion();
  }
}
