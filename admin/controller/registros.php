<?php 
use iepsanluis\libs\controller\Controller;
class Registros extends Controller
{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->Render("registros/index");
    }
}   
?>