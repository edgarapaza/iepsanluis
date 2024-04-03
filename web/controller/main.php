<?php

class Main extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function render()
  {
    $this->view->render('main/index');
  }

  function salir()
  {
    session_destroy();
    $_SESSION['admin'] = "";
    $_SESSION['sessionActiva'] = "";
    $this->render();
  }
}

