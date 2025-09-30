<?php
$peticionAjax = true;

require_once("../config/app.php");
require_once("../controladores/selectControlador.php");

$ins = new selectControlador();
$accion = $_GET['accion'] ?? '';

switch ($accion) {
    case 'area':
        $ins->fnAreaControlador();
        break;
    case 'cargo':
        $ins->fnCargoControlador();
        break;
    case 'sentido':
        $ins->fnSentidoControlador();
        break;
    case 'turno':
        $ins->fnTurnoControlador();
        break;
    case 'sistema':
        $ins->fnSistemaControlador();
        break;
    case 'tipoEquipo':
        $ins->fnTipoEquipoControlador();
        break;
    case 'tipoEquipoxSistema':
        $ins->fnTipoEquipoxSistemaControlador();
        break;
    case 'equipo':
        $ins->fnEquipoControlador();
        break;
    case 'equipoxTipoEquipo':
        $ins->fnEquipoxTipoEquipoControlador();
        break;
    case 'personal':
        $ins->fnPersonalControlador();
        break;
    case 'estadoEquipo':
        $ins->fnEstadoEquipoControlador();
        break;    
    default:
        # code...
        break;
}