<?php 
require($_SERVER['DOCUMENT_ROOT']."/TFG/autoload.php");
use  App\Controlador\GlobalControlador;
    $consulta = new GlobalControlador();
    
    // if(isset($_POST['guardar'])){
    //     $nombre = $_POST['nombre'];
    //     $apellido = $_POST['apellido'];
    //     $ci = $_POST['ci'];
    //     $complemento_ci = $_POST['complemento_ci'];
    //     $correo = $_POST['correo'];
    //     $telefono = $_POST['telefono'];

    $personas = $consulta->index("SELECT * FROM persona");
    // }
?>



