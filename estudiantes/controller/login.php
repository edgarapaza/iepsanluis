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
		$this->view->Render('login/index');
	}
	function user(){
		$username = trim(strtolower($_POST['username']));
		$passwd   = trim(strtolower($_POST['password']));
		$data = $this->model->Validar($username, $passwd);

		if($data['chk_usu'] == 1)
		{
			if($data['niv_usu'] == 1)
			{
				#echo "administrador";
				$_SESSION['katari'] = $data['id_personal'];
				$persona = $this->model->NombrePersonal($data['id_personal']);
	            $_SESSION['nombre'] = $persona['nombre'];
	            $_SESSION['foto'] = $persona['foto'];
	            header('location: ' . constant('URL') . 'dashboard');
			}else{
				$res = "No es administrador";
			}
		}else{
			$res = "Usuario no reconocido o No está activo";
		}
		$this->view->mensaje = $res;
		$this->view->Render('login/index');
	}
}