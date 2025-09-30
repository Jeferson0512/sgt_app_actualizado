<?php
if($peticionAjax){
	require_once "../modelos/selectModelo.php";
} else {
	require_once "./modelos/selectModelo.php";
}

class selectControlador extends selectModelo
{
    public function fnAreaControlador(){
        $resultado = selectModelo::fnSelectArea();
        // header('Content-Type: application/json');
        // print_r($resultado);
        echo json_encode($resultado);
    }
    public function fnCargoControlador(){
        $resultado = selectModelo::fnSelectCargo();
        // header('Content-Type: application/json');
        echo json_encode($resultado);
    }
    public function fnSentidoControlador(){
        $resultado = selectModelo::fnSelectSentido();
        // header('Content-Type: application/json');
        echo json_encode($resultado);
    }
    public function fnTurnoControlador(){
        $resultado = selectModelo::fnSelectTurno();
        // header('Content-Type: application/json');
        echo json_encode($resultado);
    }
    public function fnSistemaControlador(){
        $resultado = selectModelo::fnSelectSistema();
        // header('Content-Type: application/json');
        echo json_encode($resultado);
    }
    public function fnTipoEquipoControlador(){
        $resultado = selectModelo::fnSelectTipoEquipo();
        // header('Content-Type: application/json');
        echo json_encode($resultado);
    }
    public function fnTipoEquipoxSistemaControlador(){
        $idSistema = $_GET['idSistema'];
        $resultado = selectModelo::fnSelectTipoEquipoxSistema($idSistema);
        // header('Content-Type: application/json');
        echo json_encode($resultado);
    }
    public function fnEquipoControlador(){
        $resultado = selectModelo::fnSelectEquipo();
        // header('Content-Type: application/json');
        echo json_encode($resultado);
    }
    public function fnEquipoxTipoEquipoControlador(){
        $idTipoEquipo = $_GET['idTipoEquipo'];
        $resultado = selectModelo::fnSelectEquipoxTipoEquipo($idTipoEquipo);
        // header('Content-Type: application/json');
        echo json_encode($resultado);
    }
    public function fnPersonalControlador(){
        $resultado = selectModelo::fnSelectPersonal();
        // header('Content-Type: application/json');
        echo json_encode($resultado);
    }
    public function fnEstadoEquipoControlador(){
        $resultado = selectModelo::fnSelectEstadoEquipo();
        // header('Content-Type: application/json');
        echo json_encode($resultado);
    }
}