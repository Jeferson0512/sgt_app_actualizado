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
    
    default:
        # code...
        break;
}