<?php 
use iepsanluis\libs\controller\Controller;
class Padres extends Controller
{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->Render("padres/index");
    }
}   
?>