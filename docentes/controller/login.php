<?php

class Login extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$this->view->Render('login/index');
	}

  function user()
  {
    $username = trim(strtolower($_POST['usuario']));
    $passwd   = trim(strtolower($_POST['password']));
    //echo $username.' '.$passwd."<br>";
    //echo "es objeto:". is_object($this->model);
    $data = $this->model->Validar($username, $passwd);
    if ($data['status'] == 1) {
      if ($data['tipo'] == 1) {
        $_SESSION['docentes'] = $data['id'];
        $_SESSION['sessionActiva'] = "Docente";
        header('location: ' . constant('URL') . 'docentes/main/');
      } else {
        echo $res = "No es administrador";
      }
    } else {
      echo $res = "Usuario no reconocido o No está activo";
    }
    $this->view->Render('login/index');
  }

}
