<?php
require_once "mainModelo.php";
class mantenimientoModelo extends mainModelo
{
    protected static function fnListarCorrectivo()
    {
        $sql = mainModelo::fnConectar()->query('SELECT * FROM  ORDER BY nombre ASC');
        // return $sql->fetchAll(PDO::FETCH_ASSOC);
        return $sql->fetchAll();
    }
}