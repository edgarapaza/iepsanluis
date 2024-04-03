<?php

class LoginModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function Validar($username, $passwd)
  {
    $sql = "SELECT id, tipo,nivel, status FROM login WHERE username = '$username' AND passwd = '$passwd' limit 1;";

    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }

  public function NombrePersonal($idpersonal)
  {
    $sql = "SELECT CONCAT(nombre,' ', apellidos) as nombre, foto FROM personal WHERE id_personal =" .$idpersonal;
    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }
  public function Create($user,$password)
  {
    $sql = "INSERT INTO login Values(null,'1','$user','$password','1','1');";
    $respuesta = $this->conn->ConsultaSin($sql);
    return $respuesta;
  }
  function getById($idpersonal)
  {
      $sql = "SELECT * FROM login WHERE idlogin='$idpersonal';";
      $res = $this->conn->ConsultaArray($sql);
      return $res;
  }
}
