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
}