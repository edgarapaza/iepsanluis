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

	function salir(){

	}
}