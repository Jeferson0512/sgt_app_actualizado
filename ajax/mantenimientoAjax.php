<?php
$peticionAjax = true;

require_once "../config/app.php";
require_once "../controladores/mantenimientoControlador.php";
$ins = new mantenimientoControlador();
// $ins->fnListarMaestroAreas();
// $ins->fnProcesarAjaxAreas();
$accion =  $_POST['accion'] ?? '';

if ($_POST['mantenimiento'] == 'correctivo') {

    switch ($accion) {
        case 'listar_correctivo':
            echo $ins->fnListarCorrectivoControlador();
            break;
        case 'registrar_correctivo':
            echo $ins->fnRegistrarManttoCorrectivoControlador();
            break;
        case 'eliminar_correctivo':
            echo $ins->fnEliminarManttoCorrectivoControlador();
            break;
        case 'obtener_correctivo':
            echo $ins->fnObtenerCorrectivoControlador();
            break;

        case 'editar_area':
            // $id = intval($_POST['id_area'] ?? 0);
            // $nombre = trim($_POST['nombre_area'] ?? '');
            // $datos = new stdClass();
            // $datos->id = $id;
            // $datos->nombre = $nombre;
            // $resultado = maestrosModelo::fnEditarAreaMaestra($datos);
            // echo $resultado ? "Área actualizada correctamente" : "Error al actualizar";
            break;

        default:
            echo "Acción no reconocida";
            break;
    }
}