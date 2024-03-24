<?php 
use iepsanluis\libs\controller\Controller;
class Eventos extends Controller
{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->Render("eventos/index");
    }
}   
?>