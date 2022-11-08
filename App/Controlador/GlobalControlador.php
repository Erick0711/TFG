<?php
namespace App\Controlador;
use App\BD\Conexion;
use PDO;
class GlobalControlador extends Conexion{
    public function GlobalControlador()
    {
        parent::__construct();
    }
    public function indexSelec($nombreTabla){
        $sentencia = $this->conexion->prepare("SELECT * FROM '$nombreTabla'");
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
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
    public function verificarLogin($sql){
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registro = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $registro;
    }
}
?>
