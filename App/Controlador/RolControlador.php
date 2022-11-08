<?php
namespace App\Controlador;
use App\BD\Conexion;
use PDO;
class RolControlador extends Conexion{
    public function RolControlador()
    {
        parent::__construct();
    }

    public function verificarLogin(){

        if(isset($_POST['iniciarSesion'])){

            $usuario = $_POST['usuario'];
            $contrasenia = $_POST['contrasenia'];

            $sql = "SELECT usuario.usuario, usuario.contrasenia, rol.nombre_rol
            FROM usuario
            INNER JOIN rol ON rol.id = usuario.id_rol
            WHERE usuario.usuario = :usuario AND 
            usuario.contrasenia = :contrasenia";

            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bindParam("usuario",$usuario,PDO::PARAM_STR);
            $sentencia->bindParam("contrasenia",$contrasenia,PDO::PARAM_STR);
            $sentencia->execute();

            $datos = $sentencia->fetch(PDO::FETCH_ASSOC);

            // INICIALIZA LA SESION


            $registro = $sentencia->rowCount();
            
            if($registro >= 1){

                if($datos['nombre_rol'] == "SIAC"){
                    session_start();
                    $_SESSION['usuario'] = $datos['usuario'];
                    header("refresh:2, ../administracion/admin_sevilla");
                }elseif($datos['nombre_rol'] == "Administrador"){
                    session_start();
                    $_SESSION['usuario'] = $datos;
                    header("refresh:2, ../administracion/admin_marvella");
                }
            }else{
                echo "Conectese con su proveedor";
                header("refresh:2, ../administracion");
            }

}
?>
