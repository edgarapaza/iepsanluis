<?php

class Login extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function user(){
		echo $username = trim(strtolower($_POST['usuario']));
		echo $passwd   = trim(strtolower($_POST['passwd']));

		$data = $this->model->Validar($username, $passwd);

		if($data['status'] == 1)
		{
			if($data['nivel'] == 3)
			{
				$_SESSION['alumno'] = $data['id'];
				$_SESSION['sessionActiva'] = "estudiantes";

				$estudiante = $this->model->NombreAlumno($data['id']);

	            $_SESSION['nombre'] = $estudiante['nombre'];
	            $_SESSION['foto'] = $estudiante['foto'];
	            header('location: ' . constant('URL') . 'estudiantes/main/');
			}else{
				$res = "No corresponde a un alumno";
			}
		}else{
			$res = "Usuario no reconocido o No está activo";
		}
		$this->view->mensaje = $res;
		$this->view->Render('estudiantes/main');
	}

	function render()
	{
		$this->view->Render('login/index');
	}
}