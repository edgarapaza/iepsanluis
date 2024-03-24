<?php
use iepsanluis\libs\controller\Controller;
class Login extends Controller
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
		$username = trim(strtolower($_POST['usuario']));
		$passwd   = trim(strtolower($_POST['password']));
		//echo $username.' '.$passwd."<br>";
		//echo "es objeto:". is_object($this->model);	
		$data = $this->model->Validar($username, $passwd);
		if($data['status'] == 1)
		{
			if($data['tipo'] == 1)
			{
				$_SESSION['admin'] = $data['idlogin'];
				$_SESSION['sessionActiva'] = "admin";
	            header('location: ' . constant('URL') . 'admin/main/');
			}else{
				echo $res = "No es administrador";
			}
		}else{
			echo $res = "Usuario no reconocido o No está activo";
		}
		$this->view->Render('login/index');
	}
	function create(){
		$username = $_POST['usuario'];
		$password = $_POST['password'];
		$resulta = $this->model->Create($username,$password);
		if($resulta){
			echo "se creo correctamente";
		}else{
			echo "error al crear";
		}
		$this->view->Render('login/index');
	}
	function salir(){
		session_destroy();
		$_SESSION['admin'] = "";
		$_SESSION['sessionActiva'] = "";
		// cambio de la variable que se encarga del modulo
		// para despues usar el methodo render
		$this->view->modulo = "main";
		$this->view->render("main/index");
	}
	
}