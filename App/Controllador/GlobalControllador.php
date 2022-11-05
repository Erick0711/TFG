<?php
namespace App\Controllador;
use App\Conexion\Conexion;
use PDO;
class GlobalControllador extends Conexion{
    public function GlobalControllador()
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
    public function index2($sql2){
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
}
?>