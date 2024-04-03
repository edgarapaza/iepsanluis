<?php

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