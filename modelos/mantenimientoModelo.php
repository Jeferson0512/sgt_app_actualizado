<?php
require_once "mainModelo.php";
class mantenimientoModelo extends mainModelo
{
    protected static function fnListarCorrectivo()
    {
        $sql = mainModelo::fnConectar()->query("CALL sp_listarMantenimientoCorrectivo()");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
        // return $sql->fetchAll();
    }
    protected static function fnRegistrarManttoCorrectivo($datos)
    {

        $sql = mainModelo::fnConectar()->prepare('CALL sp_registrarManttoCorrectivo(:FechaMantto, :CodTurno, :CodSentido, :CodSistema, :CodTipoEquipo, :CodEquipo, :CodPersonal, :CodEstadoEquipo, :CodObservaciones, :Estado, :Usuario)');
        $sql->bindParam(":FechaMantto", $datos['FechaMantto']);
        $sql->bindParam(":CodTurno", $datos['CodTurno']);
        $sql->bindParam(":CodSentido", $datos['CodSentido']);
        $sql->bindParam(":CodSistema", $datos['CodSistema']);
        $sql->bindParam(":CodTipoEquipo", $datos['CodTipoEquipo']);
        $sql->bindParam(":CodEquipo", $datos['CodEquipo']);
        $sql->bindParam(":CodPersonal", $datos['CodPersonal']);
        $sql->bindParam(":CodEstadoEquipo", $datos['CodEstadoEquipo']);
        $sql->bindParam(":CodObservaciones", $datos['CodObservaciones']);
        $sql->bindParam(":Estado", $datos['Estado']);
        $sql->bindParam(":Usuario", $datos['Usuario']);
        if ($sql->execute()) {
            return [1, 'Mantenimiento correctivo registrado correctamente.'];
        } else {
            return [0, 'Error la preparar la consulta: ' . $sql->errorInfo()];
        }

        return $sql;
    }
    protected static function fnObtenerManttoCorrectivo($id)
    {
        // try {
        $sql = mainModelo::fnConectar()->prepare('CALL sp_obtenerCorrectivo(:codigo)');
        $sql->bindParam(":codigo", $id);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_ASSOC);
        // } catch (PDOException $e) {

        // }
    }
    protected static function fnActualizarManttoCorrectivo($datos)
    {
        // try {
        $sql = mainModelo::fnConectar()->prepare('CALL sp_actualizarCorrectivo(:Codigo, :FechaMantto, :CodTurno, :CodSentido, :CodSistema, :CodTipoEquipo, :CodEquipo, :CodEstadoEquipo, :CodPersonal, :CodObservaciones, :Estado)');
        $sql->bindParam(":Codigo", $datos['Codigo']);
        $sql->bindParam(":FechaMantto", $datos['FechaMantto']);
        $sql->bindParam(":CodTurno", $datos['CodTurno']);
        $sql->bindParam(":CodSentido", $datos['CodSentido']);
        $sql->bindParam(":CodSistema", $datos['CodSistema']);
        $sql->bindParam(":CodTipoEquipo", $datos['CodTipoEquipo']);
        $sql->bindParam(":CodEquipo", $datos['CodEquipo']);
        $sql->bindParam(":CodPersonal", $datos['CodPersonal']);
        $sql->bindParam(":CodEstadoEquipo", $datos['CodEstadoEquipo']);
        $sql->bindParam(":CodObservaciones", $datos['CodObservaciones']);
        $sql->bindParam(":Estado", $datos['Estado']);
        // $sql->bindParam(":Usuario", $datos['Usuario']);
        // return $sql->fetch(PDO::FETCH_ASSOC);
        if ($sql->execute()) {
            return [1, 'Mantenimiento correctivo actualizado correctamente.'];
        } else {
            return [0, 'Error la preparar la consulta: ' . $sql->errorInfo()];
        }
        return $sql;
        // } catch (PDOException $e) {

        // }
    }
    protected static function fnEliminarCorrectivo($id)
    {
        try {
            $sql = mainModelo::fnConectar()->prepare('DELETE FROM correctivo WHERE codigo = :ID');
            $sql->bindParam(":ID", $id);
            if ($sql->execute()) {
                return [1, 'Zona eliminada correctamente'];
            } else {
                return [0, 'Error al preparar la consulta ' . $sql->errorInfo()];
            }
        } catch (PDOException $e) {
            // Manejo de errores según tu lógica
            error_log("Error al eliminar: " . $e->getMessage());
            return [0, 'false'];
            // return $sql->fetchAll();
        }
    }
}
