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
  public function crear()
  {
    $this->view->Render("docentes/crear");
  }
  public function create()
  {
    // DATOS MAESTROS
    $foto = $_FILES['foto'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fechaNac = $_POST['fechaNac'];
    $sexo = $_POST['sexo'];
    $especialidad = $_POST['especialidad'];
    $ciudad = $_POST['ciudad'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $idgrado = $_POST['idgrado'];
    // DATOS MAESTROS DETALLES
    $acercade = $_POST['acercade'];
    // DATOS MAESTROS EDUCACION
    $universidadEdu = $_POST['universidadEdu'];
    $ciudadEdu = $_POST['ciudadEdu'];
    $horasEdu = $_POST['horasEdu'];
    $titulo = $_POST['titulo'];
    $anioInicio = $_POST['anioInicio'];
    $anioFin = $_POST['anioFin'];
    $grado = $_POST['grado'];
    // DATOS MAESTROS EXPERIENCIA
    $institucion = $_POST['institucionExp'];
    $cargoExp = $_POST['cargoExp'];
    $anioInicioExp = $_POST['anioInicioExp'];
    $anioFinExp = $_POST['anioFinExp'];
    $ciudadExp = $_POST['ciudadExp'];
    $mesesExp = $_POST['mesesExp'];
    // Metiendo en arrays para verificar y validad datos 
    $fechas = array($fechaNac,$anioInicioExp,$anioFinExp);
    $nums = array($idgrado,$horasEdu,$anioInicio,$anioFin,$mesesExp);
    $textos = array($especialidad,$ciudad,$acercade,$universidadEdu,$ciudadEdu,$titulo,$grado,$institucion,$cargoExp,$ciudadExp);
    // Se valida los datos
    $result = $this->validacionDatos(nombre:$nombre,apellido:$apellidos,sexo:$sexo,telefono:$telefono,email:$email,fecha:$fechas,numeros:$nums,textos:$textos);
    $foto = '/public/img/face1.jpg';
    if ($result) {
      $response = $this->model->Create($nombre, $apellidos,$fechaNac,$foto, $sexo, $especialidad, $ciudad, $telefono, $email, $idgrado);
      $id = $this->model->lastId($nombre,$apellidos);
      $id = $id['idmaestro'];
      $foto = $this->subirFoto($_FILES['foto'],'admin',$nombre,$id);
      $response4 = $this->model->LoadFoto($id,$foto);
      $response1 = $this->model->CreateDetalles($id, $acercade);
      $response2 = $this->model->CreateEducacion($id, $universidadEdu, $grado, $titulo, $anioInicio, $anioFin, $ciudadEdu, $horasEdu);
      $response3 = $this->model->CreateExperiencia($id, $institucion, $cargoExp, $anioInicioExp, $anioFinExp, $ciudadExp, $mesesExp);
      if ($response && $response1 && $response2 && $response3 && $response4) {
        $result = true."se inserto correctamente";
        $this->render();
      } else {
        $result = false."ERROR al insertar datos";
        $this->crear();
      }
    }
  }
  public function read()
  {
    $data = $this->model->Read();
    $json = array();
    while ($row = mysqli_fetch_array($data)) {
      $json[] = array(
        "foto" => constant('URLADMIN') . $row['foto'],
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
    $foto = $_FILES['foto'];
    $ruta = $_POST['ruta'];
    $acercade = $_POST['acercade'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $especialidad = $_POST['especialidad'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $email = $_POST['email'];
    $grado = $_POST['grado'];
    $textos = array($acercade, $especialidad, $ciudad, $grado);

    // verifica si los datos son validos
    $result = $this->validacionDatos(nombre: $nombre, apellido: $apellidos, email: $email, telefono: $telefono, textos: $textos);
    // verifica si hubo cambio y subida de archivo en foto
    $foto = empty($foto) ? false : true;
    if($foto == true){
      // se intenta subir el archivo
      $file = $this->subirFoto($_FILES['foto'],'admin',$nombre,$id);
      // se le da la ruta
      $foto = ($file !== false) ? $file : str_replace('/var/www/html/iepsanluis/admin', '', $ruta);
    }
    if($foto == false){
      $foto = str_replace(constant('URLADMIN'), '', $ruta);
    }
    if ($result) {
      $respuesta = $this->model->Update($id, $foto, $acercade, $nombre, $apellidos, $especialidad, $telefono, $ciudad, $email, $grado);
      echo $respuesta ? "se Inserto correctametne los datos": "no se Inserto correctametne los datos";
      $this->render();

    }
  }
  public function getById($param = null)
  {
    $id = $param[0];
    $res1 = $this->model->GetById($id);
    $res2 = $this->model->Detalle($id);
    $res3 = $this->model->Educacion($id);
    $res3 = array(
      "universidad" => $res3['universidad'],
      "grado" => $res3['grado'],
      "titulo" => $res3['titulo'],
      "inicio_e" => $res3['anio_inicio'],
      "fin_e" => $res3['anio_fin'],
      "ciudad_e" => $res3['ciudad'],
      "horas" => $res3['horas']
    );
    $res4 = $this->model->Experiencia($id);
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
        "foto" => constant('URLADMIN') . $row['foto'],
        "nombre" => $row['nombre'] . " " . $row['apellidos'],
        "especialidad" => $row['especialidad'],
        "telefono" => $row['telefono'],
        "email" => $row['email'],
      );
    }
    echo json_encode($json);
  }
}
