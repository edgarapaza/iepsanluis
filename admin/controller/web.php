<?php 
use iepsanluis\libs\controller\Controller;
class Web extends Controller
{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->Render("web/index");
    }
}   
?>