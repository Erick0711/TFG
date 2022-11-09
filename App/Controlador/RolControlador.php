<?php
namespace App\Controlador;
use App\BD\Conexion;
use PDO;
class RolControlador extends Conexion{
    public function RolControlador()
    {
        parent::__construct();
    }
    public function verificarLogin($sql){
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registro = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $registro;
    }
}
?>