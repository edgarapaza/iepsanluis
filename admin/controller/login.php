<?php
use iepsanluis\libs\controller\Controller;
class Login extends Controller
{

	function __construct()
	{
		echo "<h1>Controlador Login</h1>";
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
		echo $username.' '.$passwd."<br>";
		echo "es objeto:". is_object($this->model);
		$data = $this->model->Validar($username, $passwd);
		echo "<br>carga validar";
		if($data['chkusu'] == 1)
		{
			echo "alf";
			if($data['nivusu'] == 1)
			{
				echo "administrador";
				$_SESSION['admin'] = $data['idlogin'];
				$_SESSION['sessionActiva'] = "admin";
	            header('location: ' . constant('URL') . 'admin/main/');
			}else{
				$res = "No es administrador";
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
	function ver($param = null)
    {
        $id = $param[0];
        $res = $this->model->getById($id);

        $this->view->datos = $res;
        $this->view->Render('login/ver');
    }
	
}