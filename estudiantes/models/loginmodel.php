<?php
use iepsanluis\libs\model\Model; 
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

  public function NombreAlumno($idalum)
  {
    $sql = "SELECT idalumno, CONCAT(nombre,' ', apellidos) AS nombre, codigo, fecNacimiento, foto,ciudad, telefono, email, nombrepadre, telefonopadre, emailpadre FROM alumnos WHERE idalumno = ".$idalum." limit 1;";
    echo $sql;
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
