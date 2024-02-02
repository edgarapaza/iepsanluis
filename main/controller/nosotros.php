<?php
use iepsanluis\libs\controller\Controller; // Asegúrate de ajustar la ruta según tu estructura
class Nosotros extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$this->view->Render('nosotros/index');
	}
}