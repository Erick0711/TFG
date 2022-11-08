<?php
namespace App\Controlador;
use App\BD\Conexion;
use PDO;
class PersonaControlador extends Conexion{
    public function PersonaControlador()
    {
        parent::__construct();
    }
    public function index($sql){
        $sentencia = $this->conexion->prepare($sql);
        if($sentencia->execute();){
            $lastInsertId = $this->conexion->lastInsertId();
        }else{
            $lastInsertId = 0;
            echo $sentencia->errorInfo()[2];
        }
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function index2($sql){
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
}