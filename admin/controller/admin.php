<?php

class Admin extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function render()
  {
    //echo "render login";
    $this->view->Render('login/index');
  }

  function user()
  {
    echo $username = trim(strtolower($_POST['usuario']));
    echo $passwd   = trim(strtolower($_POST['password']));
    //echo $username.' '.$passwd."<br>";
    //echo "es objeto:". is_object($this->model);
    $data = $this->model->Validar($username, $passwd);
    if ($data['status'] == 1) {
      if ($data['tipo'] == 1) {
        $_SESSION['admin'] = $data['id'];
        $_SESSION['sessionActiva'] = "admin";
        header('location: ' . constant('URL') . 'admin/main/');
      } else {
        echo $res = "No es administrador";
      }
    } else {
      echo $res = "Usuario no reconocido o No está activo";
    }
    $this->view->Render('login/index');
  }

  function create()
  {
    $username = $_POST['usuario'];
    $password = $_POST['password'];
    $resulta = $this->model->Create($username, $password);
    if ($resulta) {
      echo "se creo correctamente";
    } else {
      echo "error al crear";
    }
    $this->view->Render('login/index');
  }
  function salir()
  {
    echo "En salir";
    session_destroy();
    $_SESSION['rol'] = "";
    $this->view->Render('web/index');
  }
}
