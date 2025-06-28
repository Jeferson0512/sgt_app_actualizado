<?php
if ($peticionAjax) {
    require_once "../modelos/mantenimientoModelo.php";
} else {
    require_once "./modelos/mantenimientoModelo.php";
}

class mantenimientoControlador extends mantenimientoModelo
{
    public function fnListarCorrectivoControlador()
    {
        $tabla = "";
        $datos = mantenimientoModelo::fnListarCorrectivo();

        $tabla .= '<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
							<th>#</th>
							<th>Cod. Correctivo</th>
							<th>Fecha</th>
							<th>Turno</th>
							<th>Tunel</th>
							<th>Sistema</th>
							<th>Tipo de Equipo</th>
							<th>Equipo</th>
							<th>Estado del Equipo</th>
							<th>Personal</th>
							<th>Observaciones</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
        $contador = 1;
        foreach ($datos as $rows) {
            $tabla .= '
					<tr class="text-center" >
						<td>' . $contador . '</td>
						<td>' . $rows['CodigoCorrectivo'] . '</td>
						<td>' . $rows['Fecha'] . '</td>
						<td>' . $rows['Turno'] . '</td>
						<td>' . $rows['Sentido'] . '</td>
						<td>' . $rows['Sistema'] . '</td>
						<td>' . $rows['TipoEquipo'] . '</td>
						<td>' . $rows['Equipo'] . '</td>
						<td>' . $rows['EstadoEquipo'] . '</td>
						<td>' . $rows['Personal'] . '</td>
						<td>' . $rows['Observaciones'] . '</td>
						<td>
							<div class="row" style="margin: 0px">
									<a href="" class="btn btn-success"></a>
                                    <button class="btn btn-info btnEditarMantto"
              data-id="' . $rows['CodigoCorrectivo'] . '"
              data-mantenimiento="correctivo"
              data-accion="obtener_correctivo">
              <i class="fas fa-edit"></i>
      </button>
									<button class="btn btn-warning btnEliminarMantto" data-id="' . $rows['CodigoCorrectivo'] . '"
									data-mantenimiento="correctivo" data-accion="eliminar_correctivo"><i class="far fa-trash-alt"></i></button>
								
							</div>
						</td>
					</tr>';
            $contador++;
        }

        $tabla .= '</tbody></table></div>';

        return $tabla;
    }
    // Metodo Controlador para registrar Correctivos
    public function fnRegistrarManttoCorrectivoControlador()
    {
        $esEdicion = !empty($_POST['id_correctivo']);
        
        $fechaCorrectivo = $_POST['correctivo_fechaCorrectivo'];
        $sentido = $_POST['correctivo_sentido'];
        $sistema = $_POST['correctivo_sistema'];
        $tipoEquipo = $_POST['correctivo_tipoEquipo'];
        $equipo = $_POST['correctivo_equipo'];
        $personal = $_POST['correctivo_personal'];
        $condicion = $_POST['correctivo_condicion'];
        $turno = $_POST['correctivo_turno'];
        $observacion = $_POST['correctivo_observacion'];
        // print_r($esEdicion);
        $datos = [
            "Codigo" => $_POST['id_correctivo'],
            "FechaMantto" => $fechaCorrectivo,
            "CodTurno" => $turno,
            "CodSentido" => $sentido,
            "CodSistema" => $sistema,
            "CodTipoEquipo" => $tipoEquipo,
            "CodEquipo" => $equipo,
            "CodPersonal" => $personal,
            "CodEstadoEquipo" => $condicion,
            "CodObservaciones" => $observacion,
            "Estado" => '1',
            "Fecha" => date("Y-m-d H:i:s"),
            "Usuario" => "rvizarreta"
        ];

        $resultado = $esEdicion
            ? mantenimientoModelo::fnActualizarManttoCorrectivo($datos)
            : mantenimientoModelo::fnRegistrarManttoCorrectivo($datos);

        // $registrarManttoCorrectivo = mantenimientoModelo::fnRegistrarManttoCorrectivo($datos);

        $alerta = [
            "Alerta" => "limpiar",
            "Titulo" => $esEdicion ? "Mantenimiento correctivo actualizado" : "Mantenimiento correctivo registrado",
            "Texto" => "$resultado[1]",
            "Tipo" => "success",
            "modal" => "registrarManttoCorrectivoMaestra"
        ];
        echo json_encode($alerta);
    }
    public function fnObtenerCorrectivoControlador()
    {
        $id    = $_POST['id'] ?? 0;
        $datos = mantenimientoModelo::fnObtenerManttoCorrectivo($id);
        echo json_encode($datos ?: []);
    }
    public function fnEliminarManttoCorrectivoControlador()
    {
        $id = $_POST['id'];
        $manttoCorrectivo = mantenimientoModelo::fnEliminarCorrectivo($id);

        $alerta = [
            "Alerta" => "limpiar",
            "Titulo" => "Mantenimiento correctivo eliminado",
            "Texto" => "$manttoCorrectivo[1]",
            "Tipo" => "success",
            "modal" => "agregarUbicacionMaestra"
        ];
        echo json_encode($alerta);
    }
}
