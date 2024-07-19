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

	function user()
	{
		$nombre = $_POST['usuario'];
		$pass = $_POST['password'];
		echo $nombre . ' '. $pass.'datos llegando gaaa';
		
		$this->view->Render('main/index');
	}
}