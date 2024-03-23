<?php
session_start();
class Salir extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function end()
  {
    session_destroy();
    echo $_SESSION['admin'] = "";
    echo $_SESSION['sessionActiva'] = "";
    $this->view->Render('login/index');
  }

  function render()
  {
    $this->view->Render('login/index');
  }
}
