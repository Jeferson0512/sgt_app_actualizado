<?php

require_once "mainModelo.php";

class maestrosModelo extends mainModelo
{

    protected static function fnListarArea()
    {
        $sql = mainModelo::fnConectar()->query('SELECT * FROM area  ORDER BY nombre ASC');
        // return $sql->fetchAll(PDO::FETCH_ASSOC);
        return $sql->fetchAll();
    }

    // // Agregar modelo de maestros
    // protected static function fnRegistrarAreaMaestraSinStore($datos)
    // {
    //     $sql = mainModelo::fnConectar()->prepare(
    //         'INSERT INTO area(codigo, nombre, abreviatura, estado, fregistro, usercreate)
    //          VALUES (:Codigo, :Nombre, :Abreviatura, :Estado, :Fecha, :Usuario)'
    //     );
    //     $sql->bindParam(":Codigo", $datos['Codigo']);
    //     $sql->bindParam(":Nombre", $datos['Nombre']);
    //     $sql->bindParam(":Abreviatura", $datos['Abreviatura']);
    //     $sql->bindParam(":Estado", $datos['Estado']);
    //     $sql->bindParam(":Fecha", $datos['Fecha']);
    //     // $sql->bindParam(":Fecha", '2017-12-10 15:45:15');
    //     $sql->bindParam(":Usuario", $datos['Usuario']);
    //     $sql->execute();

    //     return $sql;
    // }
    protected static function fnRegistrarArea($datos)
    {
        $sql = mainModelo::fnConectar()->prepare('CALL sp_agregarAreaMaestra(:Nombre, :Abreviatura, :Estado, :Usuario)');
        // $sql->bindParam(":Codigo", $datos['Codigo']);
        $sql->bindParam(":Nombre", $datos['Nombre']);
        $sql->bindParam(":Abreviatura", $datos['Abreviatura']);
        $sql->bindParam(":Estado", $datos['Estado']);
        // $sql->bindParam(":Fecha", $datos['Fecha']);
        // $sql->bindParam(":Fecha", '2017-12-10 15:45:15');
        $sql->bindParam(":Usuario", $datos['Usuario']);
        // $sql->execute();
        if ($sql->execute()) {
            return [1, 'Area registrada correctamente.'];
        } else {
            return [0, 'Error la preparar la consulta: ' . $sql->errorInfo()];
        }

        return $sql;
    }

    protected static function fnEditarArea($id, $datos)
    {
        $sql = mainModelo::fnConectar()->prepare('');
        if ($sql->execute()) {
            return [1, 'Area editada correctamente'];
        } else {
            return [0, 'Error al preparar la consulta ' . $sql->errorInfo()];
        }
        // return $sql;
    }
    protected static function fnEliminarArea($id)
    {
        $sql = mainModelo::fnConectar()->prepare('DELETE FROM area where codigo = :ID');
        $sql->bindParam(":ID", $id);
        if ($sql->execute()) {
            return [1, 'Area eliminada correctamente'];
        } else {
            return [0, 'Error al preparar la consulta ' . $sql->errorInfo()];
        }
    }

    protected static function fnListarCargo()
    {
        $sql = mainModelo::fnConectar()->query('SELECT * FROM cargo ORDER BY nombre ASC');
        // return $sql->fetchAll(PDO::FETCH_ASSOC);
        return $sql->fetchAll();
    }
    protected static function fnRegistrarCargo($datos)
    {
        $sql = mainModelo::fnConectar()->prepare('CALL sp_agregarCargoMaestra(:Nombre, :Descripcion, :Estado, :Usuario)');
        // $sql->bindParam(":Codigo", $datos['Codigo']);
        $sql->bindParam(":Nombre", $datos['Nombre']);
        $sql->bindParam(":Descripcion", $datos['Descripcion']);
        $sql->bindParam(":Estado", $datos['Estado']);
        // $sql->bindParam(":Fecha", $datos['Fecha']);
        // $sql->bindParam(":Fecha", '2017-12-10 15:45:15');
        $sql->bindParam(":Usuario", $datos['Usuario']);
        // $sql->execute();
        if ($sql->execute()) {
            return [1, 'Area registrado correctamente.'];
        } else {
            return [0, 'Error la preparar la consulta: ' . $sql->errorInfo()];
        }

        return $sql;
    }
    protected static function fnEliminarCargo($id)
    {
        $sql = mainModelo::fnConectar()->prepare('DELETE FROM cargo where codigo = :ID');
        $sql->bindParam(":ID", $id);
        if ($sql->execute()) {
            return [1, 'Cargo eliminado correctamente'];
        } else {
            return [0, 'Error al preparar la consulta ' . $sql->errorInfo()];
        }
    }

    protected static function fnListarPersonal()
    {
        $sql = mainModelo::fnConectar()->query('SELECT * FROM personal ORDER BY nombres ASC');
        // return $sql->fetchAll(PDO::FETCH_ASSOC);
        return $sql->fetchAll();
    }
    protected static function fnRegistrarPersonal($datos)
    {
        $sql = mainModelo::fnConectar()->prepare('CALL sp_agregarPersonalMaestra(:Nombres, :ApellidoPa, :ApellidoMa, :Correo, :FechaNacimiento, :DNI, :Celular, :Area, :Cargo, :Estado, :Usuario)');
        $sql->bindParam(":Nombres", $datos['Nombres']);
        $sql->bindParam(":ApellidoPa", $datos['ApellidoPa']);
        $sql->bindParam(":ApellidoMa", $datos['ApellidoMa']);
        $sql->bindParam(":Correo", $datos['Correo']);
        $sql->bindParam(":FechaNacimiento", $datos['FechaNacimiento']);
        $sql->bindParam(":DNI", $datos['DNI']);
        $sql->bindParam(":Celular", $datos['Celular']);
        $sql->bindParam(":Area", $datos['Area']);
        $sql->bindParam(":Cargo", $datos['Cargo']);
        $sql->bindParam(":Estado", $datos['Estado']);
        $sql->bindParam(":Usuario", $datos['Usuario']);
        if ($sql->execute()) {
            return [1, 'Area registrado correctamente.'];
        } else {
            return [0, 'Error la preparar la consulta: ' . $sql->errorInfo()];
        }

        return $sql;
    }
    protected static function fnEliminarPersonal($id)
    {
        $sql = mainModelo::fnConectar()->prepare('DELETE FROM personal where codigo = :ID');
        $sql->bindParam(":ID", $id);
        if ($sql->execute()) {
            return [1, 'Personal eliminado correctamente'];
        } else {
            return [0, 'Error al preparar la consulta ' . $sql->errorInfo()];
        }
    }

    protected static function fnListarSentido()
    {
        $sql = mainModelo::fnConectar()->query('SELECT * FROM sentido ORDER BY nombre ASC');
        // return $sql->fetchAll(PDO::FETCH_ASSOC);
        return $sql->fetchAll();
    }
    protected static function fnRegistrarSentido($datos)
    {
        $sql = mainModelo::fnConectar()->prepare('CALL sp_agregarSentidoMaestra(:Nombre, :Estado, :Usuario)');
        $sql->bindParam(":Nombre", $datos['Nombre']);
        $sql->bindParam(":Estado", $datos['Estado']);
        $sql->bindParam(":Usuario", $datos['Usuario']);
        // $sql->execute();
        if ($sql->execute()) {
            return [1, 'Sentido registrado correctamente.'];
        } else {
            return [0, 'Error la preparar la consulta: ' . $sql->errorInfo()];
        }

        return $sql;
    }
    protected static function fnEliminarSentido($id)
    {
        $sql = mainModelo::fnConectar()->prepare('DELETE FROM sentido where codigo = :ID');
        $sql->bindParam(":ID", $id);
        if ($sql->execute()) {
            return [1, 'Sentido eliminado correctamente'];
        } else {
            return [0, 'Error al preparar la consulta ' . $sql->errorInfo()];
        }
    }

    protected static function fnListarSistema()
    {
        $sql = mainModelo::fnConectar()->query('SELECT * FROM sistemas ORDER BY nombre ASC');
        // return $sql->fetchAll(PDO::FETCH_ASSOC);
        return $sql->fetchAll();
    }
    protected static function fnRegistrarSistema($datos)
    {
        $sql = mainModelo::fnConectar()->prepare('CALL sp_agregarSistemaMaestra(:Nombre, :Estado, :Usuario)');
        $sql->bindParam(":Nombre", $datos['Nombre']);
        $sql->bindParam(":Estado", $datos['Estado']);
        $sql->bindParam(":Usuario", $datos['Usuario']);
        if ($sql->execute()) {
            return [1, 'Sistema registrado correctamente.'];
        } else {
            return [0, 'Error la preparar la consulta: ' . $sql->errorInfo()];
        }

        return $sql;
    }
    protected static function fnEliminarSistema($id)
    {
        $sql = mainModelo::fnConectar()->prepare('DELETE FROM sistemas where codigo = :ID');
        $sql->bindParam(":ID", $id);
        if ($sql->execute()) {
            return [1, 'Sistema eliminado correctamente'];
        } else {
            return [0, 'Error al preparar la consulta ' . $sql->errorInfo()];
        }
    }

    protected static function fnListarTipoVehiculo()
    {
        $sql = mainModelo::fnConectar()->query('SELECT * FROM tipo_vehiculo ORDER BY nombre ASC');
        // return $sql->fetchAll(PDO::FETCH_ASSOC);
        return $sql->fetchAll();
    }
    protected static function fnRegistrarTipoVehiculo($datos)
    {
        $sql = mainModelo::fnConectar()->prepare('CALL sp_agregarTipoVehiculoMaestra(:Nombre, :Estado, :Usuario)');
        $sql->bindParam(":Nombre", $datos['Nombre']);
        $sql->bindParam(":Estado", $datos['Estado']);
        $sql->bindParam(":Usuario", $datos['Usuario']);
        if ($sql->execute()) {
            return [1, 'Tipo de Vehiculo registrado correctamente.'];
        } else {
            return [0, 'Error la preparar la consulta: ' . $sql->errorInfo()];
        }

        return $sql;
    }
    protected static function fnEliminarTipoVehiculo($id)
    {
        $sql = mainModelo::fnConectar()->prepare('DELETE FROM tipo_vehiculo where codigo = :ID');
        $sql->bindParam(":ID", $id);
        if ($sql->execute()) {
            return [1, 'Tipo de Vehiculo eliminado correctamente'];
        } else {
            return [0, 'Error al preparar la consulta ' . $sql->errorInfo()];
        }
    }

    protected static function fnListarTurno()
    {
        $sql = mainModelo::fnConectar()->query('SELECT * FROM turno ORDER BY nombre ASC');
        // return $sql->fetchAll(PDO::FETCH_ASSOC);
        return $sql->fetchAll();
    }
    protected static function fnRegistrarTurno($datos)
    {
        $sql = mainModelo::fnConectar()->prepare('CALL sp_agregarTurnoMaestra(:Nombre, :Estado, :Usuario)');
        $sql->bindParam(":Nombre", $datos['Nombre']);
        $sql->bindParam(":Estado", $datos['Estado']);
        $sql->bindParam(":Usuario", $datos['Usuario']);
        if ($sql->execute()) {
            return [1, 'Turno registrado correctamente.'];
        } else {
            return [0, 'Error la preparar la consulta: ' . $sql->errorInfo()];
        }

        return $sql;
    }
    protected static function fnEliminarTurno($id)
    {
        $sql = mainModelo::fnConectar()->prepare('DELETE FROM turno where codigo = :ID');
        $sql->bindParam(":ID", $id);
        if ($sql->execute()) {
            return [1, 'Turno eliminado correctamente'];
        } else {
            return [0, 'Error al preparar la consulta ' . $sql->errorInfo()];
        }
    }

    protected static function fnListarUbicacion()
    {
        $sql = mainModelo::fnConectar()->query('SELECT * FROM ubicacion ORDER BY nombre ASC');
        // return $sql->fetchAll(PDO::FETCH_ASSOC);
        return $sql->fetchAll();
    }
    protected static function fnRegistrarUbicacion($datos)
    {
        $sql = mainModelo::fnConectar()->prepare('CALL sp_agregarUbicacionMaestra(:Nombre, :Estado, :Usuario)');
        $sql->bindParam(":Nombre", $datos['Nombre']);
        $sql->bindParam(":Estado", $datos['Estado']);
        $sql->bindParam(":Usuario", $datos['Usuario']);
        if ($sql->execute()) {
            return [1, 'Ubicación registrado correctamente.'];
        } else {
            return [0, 'Error la preparar la consulta: ' . $sql->errorInfo()];
        }

        return $sql;
    }
    protected static function fnEliminarUbicacion($id)
    {
        $sql = mainModelo::fnConectar()->prepare('DELETE FROM ubicacion where codigo = :ID');
        $sql->bindParam(":ID", $id);
        if ($sql->execute()) {
            return [1, 'Ubicación eliminada correctamente'];
        } else {
            return [0, 'Error al preparar la consulta ' . $sql->errorInfo()];
        }
    }

    protected static function fnListarZona()
    {
        $sql = mainModelo::fnConectar()->query('SELECT z.codigo as codigo, z.nombre as nombre, z.estado as estado, s.nombre tunel 
            FROM zona as z INNER JOIN sentido as s ON s.codigo = z.sentido_codigo  ORDER BY tunel, nombre ASC');
        // return $sql->fetchAll(PDO::FETCH_ASSOC);
        return $sql->fetchAll();
    }
    protected static function fnRegistrarZona($datos)
    {
        $sql = mainModelo::fnConectar()->prepare('CALL sp_agregarZonaMaestra(:Nombre, :Sentido, :Estado, :Usuario)');
        $sql->bindParam(":Nombre", $datos['Nombre']);
        $sql->bindParam(":Sentido", $datos['Sentido']);
        $sql->bindParam(":Estado", $datos['Estado']);
        $sql->bindParam(":Usuario", $datos['Usuario']);
        if ($sql->execute()) {
            return [1, 'Zona registrado correctamente.'];
        } else {
            return [0, 'Error la preparar la consulta: ' . $sql->errorInfo()];
        }

        return $sql;
    }
    protected static function fnEliminarZona($id)
    {
        $sql = mainModelo::fnConectar()->prepare('DELETE FROM zona where codigo = :ID');
        $sql->bindParam(":ID", $id);
        if ($sql->execute()) {
            return [1, 'Zona eliminada correctamente'];
        } else {
            return [0, 'Error al preparar la consulta ' . $sql->errorInfo()];
        }
    }
}
    


// DELIMITER $$
//     CREATE PROCEDURE sp_agregarAreaMaestra(
//     	IN v_Nombre VARCHAR(100),
//     	IN v_Abreviatura VARCHAR(50),
//     	IN v_Estado VARCHAR(1),
//     	IN v_User_Registro VARCHAR(100))
//     BEGIN
//             DECLARE vLetra VARCHAR(6);
//             DECLARE vNumero INT;
//             DECLARE vCodigo VARCHAR(9);
            
//             SELECT SUBSTRING(codigo, 1, 6), CAST(SUBSTRING(codigo, 7, 9) AS UNSIGNED) INTO vLetra, vNumero FROM area ORDER BY codigo DESC LIMIT 1;
            
//             SET vCodigo = CONCAT(vLetra, LPAD((vNumero + 1), 3, '0'));
            
//             INSERT INTO area(codigo, nombre, abreviatura, estado, fregistro, usercreate)
//             VALUES(vCodigo, v_Nombre, v_Abreviatura, v_Estado, NOW(), v_User_Registro);
//     END$$
// DELIMITER