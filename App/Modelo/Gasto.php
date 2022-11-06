<?php 
require($_SERVER['DOCUMENT_ROOT']."/TFG/autoload.php");
use  App\Controlador\PersonaControlador;
    $consulta = new PersonaControlador();

    // CONSULTAS LISTAR LOS DATOS
    $tipos = $consulta->index("SELECT * FROM tipo_gasto");
    $gastos = $consulta->index("SELECT tipo_gasto.nombre, gasto.descripcion, gasto.monto_gasto FROM tipo_gasto INNER JOIN gasto on tipo_gasto.id = gasto.id_tipo_gasto;");

    // CONSULTAS GUARDAR DATOS
    if(isset($_POST['guardar'])){
        $nombre = $_POST['nombre'];
        $registrar = $consulta->index("INSERT INTO `tipo_gasto` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES (NULL, '$nombre', '1', current_timestamp(), current_timestamp()) ");
        // header("location:./index.php")
    }

    if(isset($_POST['guardarGasto'])){
        $tipoGasto = $_POST['tipo_gasto'];
        $descripcion = $_POST['descripcion'];
        $monto = $_POST['monto'];
        $registrar = $consulta->index("INSERT INTO `gasto` (`id`, `id_tipo_gasto`, `descripcion`, `monto_gasto`, `estado`, `created_at`, `updated_at`) VALUES (NULL, '$tipoGasto', '$descripcion', '$monto', '1', current_timestamp(), current_timestamp()) ");
        // header("location:./index.php")
    }
?>



