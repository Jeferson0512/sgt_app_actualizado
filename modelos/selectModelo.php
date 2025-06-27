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
}
