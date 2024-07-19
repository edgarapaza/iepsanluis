<?php

use iepsanluis\libs\model\Model;

class DocentesModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function Create($nombre, $apellidos, $fechaNac, $foto, $sexo, $especialidad, $ciudad, $telefono, $email, $idgrado)
  {
    $sql = "INSERT INTO maestros VALUES (null, '$nombre', '$apellidos', '$fechaNac', '$foto', '$sexo', '$especialidad', '$ciudad', '$telefono', '$email', '$idgrado');";
    $response = $this->conn->ConsultaSin($sql);
    return $response;
  }
  public function CreateDetalles($id,$acercade)
  {
    $sql = "INSERT INTO maestros_detalle VALUES (null,'$id','$acercade');";
    $response = $this->conn->ConsultaSin($sql);
    return $response;
  }
  public function CreateEducacion($id,$universidad,$grado,$titulo,$aniosIni,$aniosFin,$ciudad,$horas)
  {
    $sql = "INSERT INTO maestros_educacion VALUES (null,'$id','$universidad','$grado','$titulo','$aniosIni','$aniosFin','$ciudad','$horas');";
    $response = $this->conn->ConsultaSin($sql);
    return $response;
  }
  public function CreateExperiencia($id, $institucion, $cargo, $fechaIni, $fechaFin, $ciudad, $meses)
  {
    $sql = "INSERT INTO maestros_experiencia VALUES (null,'$id','$institucion','$cargo','$fechaIni','$fechaFin','$ciudad','$meses');";
    $response = $this->conn->ConsultaSin($sql);
    return $response;
  }
  public function Read()
  {
    $sql = "SELECT * FROM maestros;";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  public function Update($id, $foto, $acercade, $nombre, $apellidos, $especialidad, $telefono, $ciudad, $email, $grado)
  {
    $sql = "UPDATE maestros SET nombre = '$nombre', apellidos = '$apellidos', foto = '$foto', especialidad = '$especialidad', telefono = $telefono, ciudad = '$ciudad', email = '$email' WHERE idmaestro = '$id';";
    $sql1 = "UPDATE maestros_detalle SET acercade = '$acercade' WHERE idmaestro = '$id';";
    $sql2 = "UPDATE maestros_educacion SET grado = '$grado' WHERE idmaestro = '$id';";
    $response = $this->conn->ConsultaSin($sql);
    $response1 = $this->conn->ConsultaSin($sql1);
    $response2 = $this->conn->ConsultaSin($sql2);
    if ($response && $response1 && $response2) {
      $result = true;
    } else {
      $result = false;
    }

    return $result;
  }

  public function Delete($id)
  {
    $sql = "DELETE FROM maestros WHERE idmaestro = '$id';";
    $response = $this->conn->ConsultaSin($sql);
    return $response;
  }
  public function Search($data)
  {
    $sql = "SELECT * FROM maestros WHERE nombre LIKE '$data%' or apellidos LIKE '$data%' or especialidad LIKE '$data%';";
    $data = $this->conn->ConsultaCon($sql);
    return $data;
  }
  public function GetById($id)
  {
    $sql = "SELECT * FROM maestros WHERE idmaestro = '$id';";
    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }
  public function Detalle($id)
  {
    $sql = "SELECT * FROM maestros_detalle WHERE idmaestro = '$id';";
    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }
  public function Educacion($id)
  {
    $sql = "SELECT * FROM maestros_educacion WHERE idmaestro = '$id';";
    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }
  public function Experiencia($id)
  {
    $sql = "SELECT * FROM maestros_experiencia WHERE idmaestro = '$id';";
    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }
  public function lastId($nombre,$apellido){
    $sql = "SELECT idmaestro FROM maestros WHERE nombre = '$nombre' and apellidos = '$apellido';";
    $data = $this->conn->ConsultaArray($sql);
    return $data;
  }
  public function LoadFoto($id,$foto){
    $sql = "UPDATE maestros SET foto = '$foto' WHERE idmaestro = '$id';";
    $response = $this->conn->ConsultaSin($sql);
    return $response;
  }
}

