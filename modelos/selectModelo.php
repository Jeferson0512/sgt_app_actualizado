<?php
require_once("mainModelo.php");

class selectModelo extends mainModelo {

    protected static function fnSelectArea(){
        $sql = mainModelo::fnConectar()->query('SELECT codigo, nombre FROM area ORDER BY codigo ASC');
        return $sql->fetchAll();
    }
    protected static function fnSelectCargo(){
        $sql = mainModelo::fnConectar()->query('SELECT codigo, nombre FROM cargo ORDER BY codigo ASC');
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    protected static function fnSelectSentido(){
        $sql = mainModelo::fnConectar()->query('SELECT codigo, nombre FROM sentido ORDER BY codigo ASC');
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    protected static function fnSelectTurno(){
        $sql = mainModelo::fnConectar()->query('SELECT codigo, nombre FROM turno ORDER BY codigo ASC');
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    protected static function fnSelectSistema(){
        $sql = mainModelo::fnConectar()->query('SELECT codigo, nombre FROM sistemas ORDER BY codigo ASC');
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    protected static function fnSelectTipoEquipo(){
        $sql = mainModelo::fnConectar()->query('SELECT codigo, nombre FROM tipo_equipos ORDER BY codigo ASC');
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    protected static function fnSelectEquipo(){
        $sql = mainModelo::fnConectar()->query('SELECT codigo, nombre FROM equipos ORDER BY codigo ASC');
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    protected static function fnSelectPersonal(){
        $sql = mainModelo::fnConectar()->query('SELECT codigo, CONCAT(nombres, " ", apepat, " ", apemat) AS nombre FROM personal ORDER BY codigo ASC');
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    protected static function fnSelectEstadoEquipo(){
        $sql = mainModelo::fnConectar()->query('SELECT codigo, nombre FROM estado_equipo ORDER BY codigo ASC');
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
