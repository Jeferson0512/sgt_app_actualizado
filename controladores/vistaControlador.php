
<?php
class vistaControlador
{

    private $vistasPermitidas = [
        "home",
        "login",
        "404",
        "usuario",
        "area",
        "mantenimiento/calendario",
        "mantenimiento/correctivo",
        "mantenimiento/correctivo/detalle",
        "maestros/usuario",
        "maestro/area", // agregar más si necesitas
        "maestro/cargo",
        "maestro/personal",
        "maestro/sentido",
        "maestro/sistemas",
        "maestro/turno",
        "maestro/ubicacion",
        "maestro/usuarios",
        "maestro/zona",
        "maestro/tipo-vehiculo"
    ];

    /** Controlador Obtener plantilla */
    public function fnObtenerPlantillaControllador()
    {
        return require_once "./vistas/plantillas.php";
    }
    public function fnObtenerVistaControllador()
    {
        $vista = "home-view.php"; // vista por defecto
        // print_r($_GET['views']);
        if (isset($_GET['views'])) {
            $ruta = explode("/", filter_var($_GET['views'], FILTER_SANITIZE_STRING));
            $path = implode("/", $ruta); // soporta subrutas
            // print_r($_GET['views']);
            // print_r(in_array($path, $this->vistasPermitidas));

            if (in_array($path, $this->vistasPermitidas)) {
                $archivoVista = "vistas/contenidos/" . str_replace("/", "-", $path) . "-view.php";

                if (is_file($archivoVista)) {
                    $vista = str_replace("/", "-", $path) . "-view.php";
                } else {
                    $vista = "404-view.php";
                }
            } else {
                $vista = "404-view.php";
            }
        }

        return "vistas/contenidos/" . $vista;
    }
}
?>
