<?php 
require($_SERVER['DOCUMENT_ROOT']."/TFG/autoload.php");
use  App\Controlador\GlobalControlador;
    $consulta = new GlobalControlador();

    // CONSULTAS LISTAR LOS DATOS
    $tipos = $consulta->index("SELECT * FROM tipo_gasto");
    $gastos = $consulta->index("SELECT tipo_gasto.nombre, gasto.id, gasto.descripcion, gasto.monto_gasto, gasto.estado FROM tipo_gasto INNER JOIN gasto on tipo_gasto.id = gasto.id_tipo_gasto");

    // CONSULTAS GUARDAR DATOS
    if(isset($_POST['guardar'])){
        $nombre = $_POST['nombre'];
        $registrar = $consulta->index("INSERT INTO `tipo_gasto` (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES (NULL, '$nombre', '1', current_timestamp(), current_timestamp()) ");
        header("location:../../gasto.php");
    }


    if(isset($_POST['guardarGasto'])){
        $tipoGasto = $_POST['tipo_gasto'];
        $descripcion = $_POST['descripcion'];
        $monto = $_POST['monto'];
        $registrar = $consulta->index("INSERT INTO `gasto` (`id`, `id_tipo_gasto`, `descripcion`, `monto_gasto`, `estado`, `created_at`, `updated_at`) VALUES (NULL, '$tipoGasto', '$descripcion', '$monto', '1', current_timestamp(), current_timestamp()) ");
        header("location:../../gasto.php");
    }

    // ACTUALIZAR LOS DATOS DE GASTO
    if(isset($_POST['actualizarGasto'])){
        $idGasto = $_POST['idGasto'];
        $tipoGasto = $_POST['tipo_gasto'];
        $descripcion = $_POST['descripcion'];
        $monto = $_POST['monto'];
        $registrar = $consulta->index("UPDATE `gasto` SET `id_tipo_gasto` = '$tipoGasto', `descripcion` = '$descripcion', `monto_gasto` = '$monto' WHERE `gasto`.`id` = $idGasto; ");
        header("location:../../gasto.php");
    }

    // DAR DE BAJA AL DATO DE GASTO
    if(isset($_GET['eliminar'])){
        $id = $_GET['eliminar'];
        $registrar = $consulta->eliminar("UPDATE gasto SET estado=0 WHERE id=$id");
        header("location:../../gasto.php");
    }
?>



