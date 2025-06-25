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
            echo $ins->fnListarMaestroAreas();
            break;

        case 'registrar_area':
            echo $ins->fnAgregarAreaMaestraControlador();
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
            echo $ins->fnListarMaestroCargos();
            break;

        case 'registrar_cargo':
            echo $ins->fnAgregarCargoMaestraControlador();
            break;

        case 'eliminar_cargo':
            $id = $_POST['maestro_area_eliminar_id'];
            // $resultado = $ins->fnEliminarAreaControlador($id);
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
// if ($_POST['accion'] == 'listar_areas') {
//     echo $ins->fnListarMaestroAreas();
//     exit();
// // }else if($_POST['accion'] == 'registrar_area'){
// }else if($_POST['accion'] == 'registrar_area'){
//     if (!empty($_POST["maestro_area_nombre"])) {
//         echo $ins->fnAgregarAreaMaestraControlador();
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
//         echo $insMaestro->fnAgregarAreaMaestraControlador();
//         // $insMaestro->fnListarMaestroAreas();
//     }
// } else {
// }

//Verifica si este tiene algun dato, en caso de obtener realiza lo que esta dentro
if (!empty($_POST["btnMaestroCargo"])) {
    // Instancia al Controlador
    require_once "../controladores/maestrosControlador.php";
    $insMaestro = new maestrosControlador();
    // echo "IMGRESO";

    //agregar Area
    if (!empty($_POST["m_cargo_nombre"])) {
        echo $insMaestro->fnAgregarCargoMaestraControlador();
    }
} else {
} //Verifica si este tiene algun dato, en caso de obtener realiza lo que esta dentro
if (!empty($_POST["btnMaestroPersonal"])) {
    // Instancia al Controlador
    require_once "../controladores/maestrosControlador.php";
    $insMaestro = new maestrosControlador();
    // echo "IMGRESO";

    //agregar Area
    if (!empty($_POST["m_personal_nombre"])) {
        echo $insMaestro->fnAgregarPersonalMaestraControlador();
    }
} else {
} //Verifica si este tiene algun dato, en caso de obtener realiza lo que esta dentro
if (!empty($_POST["btnMaestroSentido"])) {
    // Instancia al Controlador
    require_once "../controladores/maestrosControlador.php";
    $insMaestro = new maestrosControlador();
    // echo "IMGRESO";

    //agregar Area
    if (!empty($_POST["m_sentido_nombre"])) {
        echo $insMaestro->fnAgregarSentidoMaestraControlador();
    }
} else {
} //Verifica si este tiene algun dato, en caso de obtener realiza lo que esta dentro
if (!empty($_POST["btnMaestroSistema"])) {
    // Instancia al Controlador
    require_once "../controladores/maestrosControlador.php";
    $insMaestro = new maestrosControlador();
    // echo "IMGRESO";

    //agregar Area
    if (!empty($_POST["m_sistema_nombre"])) {
        echo $insMaestro->fnAgregarSistemaMaestraControlador();
    }
} else {
} //Verifica si este tiene algun dato, en caso de obtener realiza lo que esta dentro
if (!empty($_POST["btnMaestroTipoVehiculo"])) {
    // Instancia al Controlador
    require_once "../controladores/maestrosControlador.php";
    $insMaestro = new maestrosControlador();
    // echo "IMGRESO";

    //agregar Area
    if (!empty($_POST["m_tipovehiculo_nombre"])) {
        echo $insMaestro->fnAgregarTipoVehiculoMaestraControlador();
    }
} else {
}
//Verifica si este tiene algun dato, en caso de obtener realiza lo que esta dentro
if (!empty($_POST["btnMaestroTurno"])) {
    // Instancia al Controlador
    require_once "../controladores/maestrosControlador.php";
    $insMaestro = new maestrosControlador();
    // echo "IMGRESO";

    //agregar Area
    if (!empty($_POST["m_turno_nombre"])) {
        echo $insMaestro->fnAgregarTurnoMaestraControlador();
    }
} else {
}
//Verifica si este tiene algun dato, en caso de obtener realiza lo que esta dentro
if (!empty($_POST["btnMaestroUbicacion"])) {
    // Instancia al Controlador
    require_once "../controladores/maestrosControlador.php";
    $insMaestro = new maestrosControlador();
    // echo "IMGRESO";

    //agregar Area
    if (!empty($_POST["m_ubicacion_nombre"])) {
        echo $insMaestro->fnAgregarUbicacionMaestraControlador();
    }
} else {
}
//Verifica si este tiene algun dato, en caso de obtener realiza lo que esta dentro
if (!empty($_POST["btnMaestroUsuario"])) {
    // Instancia al Controlador
    require_once "../controladores/maestrosControlador.php";
    $insMaestro = new maestrosControlador();
    // echo "IMGRESO";

    //agregar Area
    if (!empty($_POST["m_usuario_nombre"])) {
        echo $insMaestro->fnAgregarUsuarioMaestraControlador();
    }
} else {
}
//Verifica si este tiene algun dato, en caso de obtener realiza lo que esta dentro
if (!empty($_POST["btnMaestroZona"])) {
    // Instancia al Controlador
    require_once "../controladores/maestrosControlador.php";
    $insMaestro = new maestrosControlador();
    // echo "IMGRESO";

    //agregar Area
    if (!empty($_POST["m_zona_nombre"])) {
        echo $insMaestro->fnAgregarZonaMaestraControlador();
    }
} else {
}


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
