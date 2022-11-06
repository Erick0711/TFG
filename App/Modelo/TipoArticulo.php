<?php 
require($_SERVER['DOCUMENT_ROOT']."/TFG/autoload.php");
use  App\Controlador\GlobalControlador;
    $consulta = new GlobalControlador();
    $personas = $consulta->index("SELECT * FROM persona");
?>

