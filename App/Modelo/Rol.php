<?php 
require($_SERVER['DOCUMENT_ROOT']."/TFG/autoload.php");
use  App\Controlador\GlobalControlador;
    $consulta = new GlobalControlador();

    if(isset($_POST['iniciarSesion'])){
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];
        if(strlen($usuario) && strlen($contrasenia)){
    $dato = $consulta->verificarLogin("SELECT usuario.usuario, usuario.contrasenia, rol.nombre_rol
                                FROM usuario
                                INNER JOIN rol ON rol.id = usuario.id_rol
                                WHERE usuario.usuario = '$usuario' AND 
                                usuario.contrasenia = '$contrasenia'");

    // print_r($dato['usuario']);
    // print_r($dato['contrasenia']);
    // print_r($dato['nombre_rol']);
    if($dato >= 1){
        session_start();
        $_SESSION['usuario'] = $dato['usuario'];
        $_SESSION['nombre_rol'] = $dato['nombre_rol'];

        if($_SESSION['nombre_rol'] == "SIAC"){
            header("Location: ../../");
        }
        if($_SESSION['nombre_rol'] == "Administrador"){
            header("Location: ../../gasto.php");
        }

    }else{
        echo "USUARIO NO EXISTENTE";
    }
    }else{
        header("Location: ../../login.php");
    }
}else{
    header("Location: ../../login.php");
}
?>



