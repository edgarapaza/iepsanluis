<?php 

class Estudiantes extends Controller
{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->Render("estudiantes/index");
    }
}   
?>