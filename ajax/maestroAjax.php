<?php
$peticionAjax = true;

require_once "../config/app.php";
require_once "../controladores/maestrosControlador.php";
$ins = new maestrosControlador();
// $ins->fnListarMaestroAreas();
// $ins->fnProcesarAjaxAreas();

if ($_POST['tipoMaestro'] == 'area') {
    $accion =  $_POST['accion'] ?? '';

    switch ($accion) {
        case 'listar_areas':
            echo $ins->fnListarAreasControlador();
            break;

        case 'registrar_area':
            echo $ins->fnRegistrarAreaControlador();
            break;

        case 'eliminar_area':
            $id = $_POST['maestro_area_eliminar_id'];
            $resultado = $ins->fnEliminarAreaControlador($id);
            break;

        case 'editar_area':
            // $id = intval($_POST['id_area'] ?? 0);
            // $nombre = trim($_POST['nombre_area'] ?? '');
            // $datos = new stdClass();
            // $datos->id = $id;
            // $datos->nombre = $nombre;
            // $resultado = maestrosModelo::fnEditarAreaMaestra($datos);
            // echo $resultado ? "Área actualizada correctamente" : "Error al actualizar";
            break;

        default:
            echo "Acción no reconocida";
            break;
    }
}
if ($_POST['tipoMaestro'] == 'cargo') {
    $accion =  $_POST['accion'] ?? '';

    switch ($accion) {
        case 'listar_cargo':
            echo $ins->fnListarCargosControlador();
            break;

        case 'registrar_cargo':
            echo $ins->fnRegistrarCargoControlador();
            break;

        case 'eliminar_cargo':
            $id = $_POST['maestro_cargo_eliminar_id'];
            $resultado = $ins->fnEliminarCargoControlador($id);
            break;

        case 'editar_cargo':
            // $id = intval($_POST['id_area'] ?? 0);
            // $nombre = trim($_POST['nombre_area'] ?? '');
            // $datos = new stdClass();
            // $datos->id = $id;
            // $datos->nombre = $nombre;
            // $resultado = maestrosModelo::fnEditarAreaMaestra($datos);
            // echo $resultado ? "Área actualizada correctamente" : "Error al actualizar";
            break;

        default:
            echo "Acción no reconocida";
            break;
    }
}
if ($_POST['tipoMaestro'] == 'personal') {
    $accion =  $_POST['accion'] ?? '';

    switch ($accion) {
        case 'listar_personal':
            echo $ins->fnListarPersonalControlador();
            break;

        case 'registrar_personal':
            echo $ins->fnRegistrarPersonalControlador();
            break;

        case 'eliminar_personal':
            $id = $_POST['maestro_personal_eliminar_id'];
            // $resultado = $ins->fnEliminarPersonalControlador($id);
            break;

        case 'editar_personal':
            // $id = intval($_POST['id_area'] ?? 0);
            // $nombre = trim($_POST['nombre_area'] ?? '');
            // $datos = new stdClass();
            // $datos->id = $id;
            // $datos->nombre = $nombre;
            // $resultado = maestrosModelo::fnEditarAreaMaestra($datos);
            // echo $resultado ? "Área actualizada correctamente" : "Error al actualizar";
            break;

        default:
            echo "Acción no reconocida";
            break;
    }
}
if ($_POST['tipoMaestro'] == 'sentido') {
    $accion =  $_POST['accion'] ?? '';

    switch ($accion) {
        case 'listar_sentido':
            echo $ins->fnListarSentidoControlador();
            break;

        case 'registrar_sentido':
            echo $ins->fnRegistrarSentidoControlador();
            break;

        case 'eliminar_sentido':
            $id = $_POST['maestro_sentido_eliminar_id'];
            $resultado = $ins->fnEliminarSentidoControlador($id);
            break;

        case 'editar_sentido':
            // $id = intval($_POST['id_area'] ?? 0);
            // $nombre = trim($_POST['nombre_area'] ?? '');
            // $datos = new stdClass();
            // $datos->id = $id;
            // $datos->nombre = $nombre;
            // $resultado = maestrosModelo::fnEditarAreaMaestra($datos);
            // echo $resultado ? "Área actualizada correctamente" : "Error al actualizar";
            break;

        default:
            echo "Acción no reconocida";
            break;
    }
}
if ($_POST['tipoMaestro'] == 'sistema') {
    $accion =  $_POST['accion'] ?? '';

    switch ($accion) {
        case 'listar_sistema':
            echo $ins->fnListarSistemaControlador();
            break;

        case 'registrar_sistema':
            echo $ins->fnRegistrarSistemaControlador();
            break;

        case 'eliminar_sistema':
            $id = $_POST['maestro_sistema_eliminar_id'];
            $resultado = $ins->fnEliminarSistemaControlador($id);
            break;

        case 'editar_sistema':
            // $id = intval($_POST['id_area'] ?? 0);
            // $nombre = trim($_POST['nombre_area'] ?? '');
            // $datos = new stdClass();
            // $datos->id = $id;
            // $datos->nombre = $nombre;
            // $resultado = maestrosModelo::fnEditarAreaMaestra($datos);
            // echo $resultado ? "Área actualizada correctamente" : "Error al actualizar";
            break;

        default:
            echo "Acción no reconocida";
            break;
    }
}
if ($_POST['tipoMaestro'] == 'tipoVehiculo') {
    $accion =  $_POST['accion'] ?? '';

    switch ($accion) {
        case 'listar_tipoVehiculo':
            echo $ins->fnListarTipoVehiculoControlador();
            break;

        case 'registrar_tipoVehiculo':
            echo $ins->fnRegistrarTipoVehiculoControlador();
            break;

        case 'eliminar_tipoVehiculo':
            $id = $_POST['maestro_tipoVehiculo_eliminar_id'];
            $resultado = $ins->fnEliminarTipoVehiculoControlador($id);
            break;

        case 'editar_tipoVehiculo':
            // $id = intval($_POST['id_area'] ?? 0);
            // $nombre = trim($_POST['nombre_area'] ?? '');
            // $datos = new stdClass();
            // $datos->id = $id;
            // $datos->nombre = $nombre;
            // $resultado = maestrosModelo::fnEditarAreaMaestra($datos);
            // echo $resultado ? "Área actualizada correctamente" : "Error al actualizar";
            break;

        default:
            echo "Acción no reconocida";
            break;
    }
}
if ($_POST['tipoMaestro'] == 'turno') {
    $accion =  $_POST['accion'] ?? '';

    switch ($accion) {
        case 'listar_turno':
            echo $ins->fnListarTurnoControlador();
            break;

        case 'registrar_turno':
            echo $ins->fnRegistrarTurnoControlador();
            break;

        case 'eliminar_turno':
            $id = $_POST['maestro_turno_eliminar_id'];
            $resultado = $ins->fnEliminarTurnoControlador($id);
            break;

        case 'editar_turno':
            // $id = intval($_POST['id_area'] ?? 0);
            // $nombre = trim($_POST['nombre_area'] ?? '');
            // $datos = new stdClass();
            // $datos->id = $id;
            // $datos->nombre = $nombre;
            // $resultado = maestrosModelo::fnEditarAreaMaestra($datos);
            // echo $resultado ? "Área actualizada correctamente" : "Error al actualizar";
            break;

        default:
            echo "Acción no reconocida";
            break;
    }
}
if ($_POST['tipoMaestro'] == 'ubicacion') {
    $accion =  $_POST['accion'] ?? '';

    switch ($accion) {
        case 'listar_ubicacion':
            echo $ins->fnListarUbicacionControlador();
            break;

        case 'registrar_ubicacion':
            echo $ins->fnRegistrarUbicacionControlador();
            break;

        case 'eliminar_ubicacion':
            $id = $_POST['maestro_ubicacion_eliminar_id'];
            $resultado = $ins->fnEliminarUbicaciconControlador($id);
            break;

        case 'editar_ubicacion':
            // $id = intval($_POST['id_area'] ?? 0);
            // $nombre = trim($_POST['nombre_area'] ?? '');
            // $datos = new stdClass();
            // $datos->id = $id;
            // $datos->nombre = $nombre;
            // $resultado = maestrosModelo::fnEditarAreaMaestra($datos);
            // echo $resultado ? "Área actualizada correctamente" : "Error al actualizar";
            break;

        default:
            echo "Acción no reconocida";
            break;
    }
}
if ($_POST['tipoMaestro'] == 'usuario') {
    $accion =  $_POST['accion'] ?? '';

    switch ($accion) {
        case 'listar_usuario':
            echo $ins->fnListarUsuarioControlador();
            break;

        case 'registrar_usuario':
            echo $ins->fnRegistrarUsuarioControlador();
            break;

        case 'eliminar_usuario':
            $id = $_POST['maestro_usuario_eliminar_id'];
            $resultado = $ins->fnEliminarUsuarioControlador($id);
            break;

        case 'editar_usuario':
            // $id = intval($_POST['id_area'] ?? 0);
            // $nombre = trim($_POST['nombre_area'] ?? '');
            // $datos = new stdClass();
            // $datos->id = $id;
            // $datos->nombre = $nombre;
            // $resultado = maestrosModelo::fnEditarAreaMaestra($datos);
            // echo $resultado ? "Área actualizada correctamente" : "Error al actualizar";
            break;

        default:
            echo "Acción no reconocida";
            break;
    }
}
if ($_POST['tipoMaestro'] == 'zona') {
    $accion =  $_POST['accion'] ?? '';

    switch ($accion) {
        case 'listar_zona':
            echo $ins->fnListarZonaControlador();
            break;

        case 'registrar_zona':
            echo $ins->fnRegistrarZonaControlador();
            break;

        case 'eliminar_zona':
            $id = $_POST['maestro_zona_eliminar_id'];
            $resultado = $ins->fnEliminarZonaControlador($id);
            break;

        case 'editar_zona':
            // $id = intval($_POST['id_area'] ?? 0);
            // $nombre = trim($_POST['nombre_area'] ?? '');
            // $datos = new stdClass();
            // $datos->id = $id;
            // $datos->nombre = $nombre;
            // $resultado = maestrosModelo::fnEditarAreaMaestra($datos);
            // echo $resultado ? "Área actualizada correctamente" : "Error al actualizar";
            break;

        default:
            echo "Acción no reconocida";
            break;
    }
}
// if ($_POST['accion'] == 'listar_areas') {
//     echo $ins->fnListarMaestroAreas();
//     exit();
// // }else if($_POST['accion'] == 'registrar_area'){
// }else if($_POST['accion'] == 'registrar_area'){
//     if (!empty($_POST["maestro_area_nombre"])) {
//         echo $ins->fnRegistrarAreaControlador();
//         // $insMaestro->fnListarMaestroAreas();
//     }
// }

// //Verifica si este tiene algun dato, en caso de obtener realiza lo que esta dentro
// if (isset($_POST["maestro_area_nombre"])) {
//     // Instancia al Controlador
//     require_once "../controladores/maestrosControlador.php";
//     $insMaestro = new maestrosControlador();
//     // echo "IMGRESO";

//     //agregar Area
//     if (!empty($_POST["maestro_area_nombre"])) {
//         echo $insMaestro->fnRegistrarAreaControlador();
//         // $insMaestro->fnListarMaestroAreas();
//     }
// } else {
// }


// $("#agregar").submit(function(event) {
//     var parametros = $(this).serialize();
//     $.ajax({
//         type: "POST",
//         url: "../controlador/"+carpeta+"/agregar.php",
//         data: parametros,
//         beforeSend: function(objeto){
//             $("#mensaje").html("Mensaje: Cargando...");
//             },
//         success: function(datos){
//             $("#mensaje").html(datos);//mostrar mensaje 
//             //$('#agregar').modal('hide'); // ocultar  formulario
//             //$("#agregar")[0].reset();  //resetear inputs
//             $('#modal-agregar').modal('hide');  // ocultar modal
//             loadTable();
//         }
//     });
//     event.preventDefault();
// });
