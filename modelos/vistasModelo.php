<?php
/* Es para la vista de modelo y cada modelo deberia de tener su ontrolador, 
    pero un controlador puede tenre varios modelos */
class vistasModelo
{

    /*===== Modelo obtener vistas =====*/
    protected static function fnObtenerVistasModelo($vistas)
    {
        $listaBlanca = ["client-list", "client-new", "client-search", "client-update", "company", 
        "home", "item-list", "item-new", "item-search", "item-update", "reservation-list", 
        "reservation-new", "reservation-pending", "reservation-search", "reservation-update",
        "user-list", "reservation-reservation", "user-new", "user-search", "user-update",
        "maestro-area", "maestro-cargo", "maestro-personal", "maestro-sentido", "maestro-sistemas", 
        "maestro-turno", "maestro-ubicacion", "maestro-usuarios", "maestro-zona", "maestro-tipo-vehiculo"];

        if (in_array($vistas, $listaBlanca)) {
            if (is_file("./vistas/contenidos/" . $vistas . "-view.php")) {
                $contenido = "./vistas/contenidos/" . $vistas . "-view.php";
            } else {
                $contenido = "404";
            }
        } elseif ($vistas == "login" || $vistas == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
