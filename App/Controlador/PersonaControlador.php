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
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function eliminar($sql){
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetch();
        return $registros;
    }
    public function editar($sql){
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetch(PDO::FETCH_LAZY);
        return $registros;
    }
}
?>