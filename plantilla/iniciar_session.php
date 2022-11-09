
    <?php
    session_start();
    $sesion = $_SESSION['nombre_rol'];
    if(!isset($sesion)){
    header("location: ./login.php");
    }elseif($sesion != "SIAC" && $sesion != "Administrador"){
    // print_r($_SESSION['nombre_condominio']);
    header("location: ./plantilla/eliminar_session.php");
    }
    ?>