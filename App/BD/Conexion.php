<?php
namespace App\BD;
use PDO;
use PDOException;

class Conexion{
    protected $server = "127.0.0.1";
    protected $user = "root";
    protected $password = "";
    protected $conexion;
    public function __construct()
    {
        try {
            $this->conexion = new PDO("mysql:host=$this->server;dbname=siac_sevilla",$this->user,$this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $err) {
            echo "CONEXION FALLIDA DEBIDO A: ".$err;
        }
    }
}
?>