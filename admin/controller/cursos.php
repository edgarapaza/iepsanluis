<?php
use iepsanluis\libs\controller\Controller; // Asegúrate de ajustar la ruta según tu estructura
class Cursos extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$this->view->Render('cursos/index');
	}
}