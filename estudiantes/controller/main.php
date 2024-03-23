<?php
use iepsanluis\libs\controller\Controller; // Asegúrate de ajustar la ruta según tu estructura
class Main extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$this->view->Render('main/index');
	}

	function salir()
	{
		session_destroy();
		$_SESSION['alumno'] = "";
		$_SESSION['sessionActiva'] = "";
		$this->render('login/index');
	}
}