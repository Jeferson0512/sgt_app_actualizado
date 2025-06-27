<?php
if($peticionAjax){
	require_once "../modelos/selectModelo.php";
} else {
	require_once "./modelos/selectModelo.php";
}

class selectControlador extends selectModelo
{
    public function fnAreaControlador(){
        $areas = selectModelo::fnSelectArea();
        // header('Content-Type: application/json');
        // print_r($areas);
        echo json_encode($areas);
    }
    public function fnCargoControlador(){
        $areas = selectModelo::fnSelectCargo();
        // header('Content-Type: application/json');
        echo json_encode($areas);
    }
    public function fnSentidoControlador(){
        $tunel = selectModelo::fnSelectSentido();
        // header('Content-Type: application/json');
        echo json_encode($tunel);
    }
    public function fnTurnoControlador(){
        $tunel = selectModelo::fnSelectTurno();
        // header('Content-Type: application/json');
        echo json_encode($tunel);
    }
    public function fnSistemaControlador(){
        $tunel = selectModelo::fnSelectSistema();
        // header('Content-Type: application/json');
        echo json_encode($tunel);
    }
    public function fnTipoEquipoControlador(){
        $tunel = selectModelo::fnSelectTipoEquipo();
        // header('Content-Type: application/json');
        echo json_encode($tunel);
    }
    public function fnEquipoControlador(){
        $tunel = selectModelo::fnSelectEquipo();
        // header('Content-Type: application/json');
        echo json_encode($tunel);
    }
    public function fnPersonalControlador(){
        $tunel = selectModelo::fnSelectPersonal();
        // header('Content-Type: application/json');
        echo json_encode($tunel);
    }
    public function fnEstadoEquipoControlador(){
        $tunel = selectModelo::fnSelectEstadoEquipo();
        // header('Content-Type: application/json');
        echo json_encode($tunel);
    }
}