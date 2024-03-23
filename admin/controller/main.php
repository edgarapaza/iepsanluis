<?php
use iepsanluis\libs\controller\Controller; // Asegúrate de ajustar la ruta según tu estructura
class Main extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function Salir()
    {
    	echo "Estamos en SALIR";
    	session_destroy();
    	echo $_SESSION['admin'] = "";
    	echo $_SESSION['sessionActiva'] = "";
        $this->view->Render('main/dashboard');
    }

	function render()
	{
		$this->view->Render('main/dashboard');
	}


}