<?php
use iepsanluis\libs\model\Model; 
class DocentesModel extends Model
{
    function __construct(){
        parent::__construct();
    }
    public function Create($data){
        
    }
    public function Read(){
        $sql = "SELECT * FROM maestros;";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
    public function Update($data){
        
    }
    public function Delete($id){
        $sql = "DELETE FROM maestros WHERE idmaestro = '$id';";
        $response = $this->conn->ConsultaSin($sql);
        return $response;
    }
    public function Search($data){
        $sql = "SELECT * FROM maestros WHERE nombre LIKE '$data%' or apellidos LIKE '$data%' or especialidad LIKE '$data%';";
        $data = $this->conn->ConsultaCon($sql);
        return $data;
    }
    public function GetById($id){
        $sql = "SELECT * FROM maestros WHERE idmaestro = '$id';";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }
    public function Detalle($id){
        $sql = "SELECT * FROM maestros_detalle WHERE idmaestro = '$id';";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }
    public function Educacion($id){
        $sql = "SELECT * FROM maestros_educacion WHERE idmaestro_educacion = '$id';";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }
    public function Experiencia($id){
        $sql = "SELECT * FROM maestros_experiencia WHERE idmaestro_experiencia = '$id';";
        $data = $this->conn->ConsultaArray($sql);
        return $data;
    }


}