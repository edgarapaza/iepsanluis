<?php

use iepsanluis\libs\controller\Controller;

class Docentes extends Controller
{
  function __construct()
  {
    parent::__construct();
  }
  public function render()
  {
    $this->view->Render("docentes/index");
  }
  public function detalles()
  {
    $this->view->Render("docentes/detalles");
  }
  public function Create()
  {
  }
  public function read()
  {
    $data = $this->model->Read();
    $json = array();
    while ($row = mysqli_fetch_array($data)) {
      $json[] = array(
        "foto" => constant('URLADMIN').$row['foto'],
        "id" => $row['idmaestro'],
        "nombre" => $row['nombre'] . " " . $row['apellidos'],
        "especialidad" => $row['especialidad'],
        "telefono" => $row['telefono'],
        "email" => $row['email'],
      );
    }
    echo json_encode($json);
  }
  public function update()
  {
    $id = $_POST['id'];
    $foto = $_POST['foto'];
    $acercade = $_POST['acercade'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $especialidad = $_POST['especialidad'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $email = $_POST['email'];
    $grado = $_POST['grado'];
    $result = $this->validacionDatos(nombre:$nombre,apellido:$apellido,email:$email,telefono:$telefono,descripcion:$acercade,texto:$especialidad);
    if ($result) {
      $respuesta = $this->model->Update($id, $foto,$acercade,$nombre,$apellidos,$especialidad,$telefono,$ciudad,$email,$grado);  
    }
    if ($respuesta) {
      echo 'actualizado correctamente';
    } else {
      echo 'error al actualizar al personal';
    }
  }
  public function getById($param = null)
  {
    $idpersonal = $param[0];
    $res1 = $this->model->GetById($idpersonal);
    $res2 = $this->model->Detalle($idpersonal);
    $res3 = $this->model->Educacion($idpersonal);
    $res3 = array(
      "universidad" => $res3['universidad'],
      "grado" => $res3['grado'],
      "titulo" => $res3['titulo'],
      "inicio_e" => $res3['anio_inicio'],
      "fin_e" => $res3['anio_fin'],
      "ciudad_e" => $res3['ciudad'],
      "horas" => $res3['horas']
    );
    $res4 = $this->model->Experiencia($idpersonal);
    $res4 = array(
      "institucion" => $res4['institucion'],
      "cargo" => $res4['cargo'],
      "anio_inicio" => $res4['anio_inicio'],
      "anio_fin" => $res4['anio_fin'],
      "ciudad_exp" => $res4['ciudad'],
      "meses" => $res4['meses']
    );
    $this->view->datos = $res1 + $res2 + $res3 + $res4;
    $this->view->Render('docentes/detalles');
  }
  public function delete()
  {
    $id = $_POST['id'];
    $respuesta = $this->model->Delete($id);
    if ($respuesta) {
      echo 'eliminado correctamente';
    } else {
      echo 'error al eliminar al personal';
    }
  }
  public function search()
  {
    $search = $_POST['search'];
    $data = $this->model->Search($search);
    $json = array();
    while ($row = mysqli_fetch_array($data)) {
      $json[] = array(
        "id" => $row['idmaestro'],
        "foto" => constant('URLADMIN').$row['foto'],
        "nombre" => $row['nombre'] . " " . $row['apellidos'],
        "especialidad" => $row['especialidad'],
        "telefono" => $row['telefono'],
        "email" => $row['email'],
      );
    }
    echo json_encode($json);
  }
}
