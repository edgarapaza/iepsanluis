<?php

class contacto extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$this->view->Render('Contacto/index');
	}
}
