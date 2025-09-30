<?php
if ($peticionAjax) {
	require_once "../modelos/maestrosModelo.php";
} else {
	require_once "./modelos/maestrosModelo.php";
}

class maestrosControlador extends maestrosModelo
{

	// agregar modelo maestros
	// public function fnRegistrarMaestrosControlador() {}


	//Listar Tabla Areas Maestras
	public function fnListarAreasControlador()
	{
		$tabla = "";
		$datos = maestrosModelo::fnListarArea();

		$tabla .= '
		<div class="table-responsive">
			<table class="table table-dark table-sm">
				<thead>
					<tr class="text-center roboto-medium">
						<th>#</th>
						<th>Codigo</th>
						<th>Nombre</th>
						<th>Abreviatura</th>
						<th>Estado</th>
						<th></th>
					</tr>
				</thead>
				<tbody>';
		$contador = 1;
		foreach ($datos as $rows) {
			$tabla .= '
				<tr class="text-center" >
					<td>' . $contador . '</td>
					<td>' . $rows['codigo'] . '</td>
					<td>' . $rows['nombre'] . '</td>
					<td>' . $rows['abreviatura'] . '</td>
					<td>' . ($rows['estado'] == 1 ? 'Operativo' : 'Inoperativo') . '</td>								
					<td>
						<div class="row" style="margin: 0px">
							<button class="btn btn-info btnEditarMaestro"
								data-id="' . $rows['codigo'] . '"
								data-maestro="area"
								data-accion="obtener_area">
								<i class="fas fa-edit"></i>
							</button>
							<button class="btn btn-warning btnEliminarMaestro" data-id="' . $rows['codigo'] . '"
							data-maestro="area" data-accion="eliminar_area"><i class="far fa-trash-alt"></i></button>
							
						</div>
					</td>
				</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
		// echo $datos;
	} /* Fin controlador */

	//Listar Tabla Tabla Cargos Maestras
	public function fnListarCargosControlador()
	{
		$tabla = "";
		$datos = maestrosModelo::fnListarCargo();

		$tabla .= '<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
							<th>#</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Descripcion</th>
							<th>Estado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
		$contador = 1;
		foreach ($datos as $rows) {
			$tabla .= '
					<tr class="text-center" >
						<td>' . $contador . '</td>
						<td>' . $rows['codigo'] . '</td>
						<td>' . $rows['nombre'] . '</td>
						<td>' . $rows['descripcion'] . '</td>
						<td>' . ($rows['estado'] == 1 ? 'Operativo' : 'Inoperativo') . '</td>
						<td>
							<div class="row" style="margin: 0px">
								<button class="btn btn-info btnEditarMaestro"
									data-id="' . $rows['codigo'] . '"
									data-maestro="cargo"
									data-accion="obtener_cargo">
									<i class="fas fa-edit"></i>
								</button>
								<button class="btn btn-warning btnEliminarMaestro"
									data-id="' . $rows['codigo'] . '"
									data-maestro="cargo"
									data-accion="eliminar_cargo">
									<i class="far fa-trash-alt"></i>
								</button>
							</div>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Personal Maestras
	public function fnListarPersonalControlador()
	{
		$tabla = "";
		$datos = maestrosModelo::fnListarPersonal();

		$tabla .= '<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
							<th>#</th>
							<th>Codigo</th>
							<th>Nombres y Apellidos</th>
							<th>DNI</th>
							<th>Email</th>
							<th>Celular</th>
							<th>Estado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
		$contador = 1;
		foreach ($datos as $rows) {
			$tabla .= '
					<tr class="text-center" >
						<td>' . $contador . '</td>
						<td>' . $rows['codigo'] . '</td>
						<td>' . $rows['nombres'] . ' ' . $rows['apepat'] . ' ' . $rows['apemat'] . '</td>
						<td>' . $rows['dni'] . '</td>
						<td>' . $rows['email'] . '</td>
						<td>' . $rows['celular'] . '</td>
						<td>' . ($rows['estado'] == 1 ? 'Operativo' : 'Inoperativo') . '</td>
						<td>
							<div class="row" style="margin: 0px">
								<button class="btn btn-info btnEditarMaestro"
									data-id="' . $rows['codigo'] . '"
									data-maestro="personal"
									data-accion="obtener_personal">
									<i class="fas fa-edit"></i>
								</button>
								<button class="btn btn-warning btnEliminarMaestro" data-id="' . $rows['codigo'] . '"
								data-maestro="personal" data-accion="eliminar_personal"><i class="far fa-trash-alt"></i></button>
							</div>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Sentido Maestras
	public function fnListarSentidoControlador()
	{
		$tabla = "";
		$datos = maestrosModelo::fnListarSentido();

		$tabla .= '<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
							<th>#</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Estado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
		$contador = 1;
		foreach ($datos as $rows) {
			$tabla .= '
					<tr class="text-center" >
						<td>' . $contador . '</td>
						<td>' . $rows['codigo'] . '</td>
						<td>' . $rows['nombre'] . '</td>
						<td>' . ($rows['estado'] == 1 ? 'Operativo' : 'Inoperativo') . '</td>
						<td>
							<div class="row" style="margin: 0px">
								<button class="btn btn-info btnEditarMaestro"
									data-id="' . $rows['codigo'] . '"
									data-maestro="sentido"
									data-accion="obtener_sentido">
									<i class="fas fa-edit"></i>
								</button>
								<button class="btn btn-warning btnEliminarMaestro" data-id="' . $rows['codigo'] . '"
								data-maestro="sentido" data-accion="eliminar_sentido"><i class="far fa-trash-alt"></i></button>
							</div>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Sistema Maestras
	public function fnListarSistemaControlador()
	{
		$tabla = "";
		$datos = maestrosModelo::fnListarSistema();

		$tabla .= '<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
							<th>#</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Estado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
		$contador = 1;
		foreach ($datos as $rows) {
			$tabla .= '
					<tr class="text-center" >
						<td>' . $contador . '</td>
						<td>' . $rows['codigo'] . '</td>
						<td>' . $rows['nombre'] . '</td>
						<td>' . ($rows['estado'] == 1 ? 'Operativo' : 'Inoperativo') . '</td>
						<td>
							<div class="row" style="margin: 0px">
								<button class="btn btn-info btnEditarMaestro"
									data-id="' . $rows['codigo'] . '"
									data-maestro="sistema"
									data-accion="obtener_sistema">
									<i class="fas fa-edit"></i>
								</button>
								<button class="btn btn-warning btnEliminarMaestro" data-id="' . $rows['codigo'] . '"
								data-maestro="sistema" data-accion="eliminar_sistema"><i class="far fa-trash-alt"></i></button>
							</div>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Tipo Vehiculo Maestras
	public function fnListarTipoVehiculoControlador()
	{
		$tabla = "";
		$datos = maestrosModelo::fnListarTipoVehiculo();

		$tabla .= '<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
							<th>#</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Estado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
		$contador = 1;
		foreach ($datos as $rows) {
			$tabla .= '
					<tr class="text-center" >
						<td>' . $contador . '</td>
						<td>' . $rows['codigo'] . '</td>
						<td>' . $rows['nombre'] . '</td>
						<td>' . ($rows['estado'] == 1 ? 'Operativo' : 'Inoperativo') . '</td>
						<td>
							<div class="row" style="margin: 0px">
								<button class="btn btn-info btnEditarMaestro"
									data-id="' . $rows['codigo'] . '"
									data-maestro="tipoVehiculo"
									data-accion="obtener_tipoVehiculo">
									<i class="fas fa-edit"></i>
								</button>
								<button class="btn btn-warning btnEliminarMaestro" data-id="' . $rows['codigo'] . '"
								data-maestro="tipoVehiculo" data-accion="eliminar_tipoVehiculo"><i class="far fa-trash-alt"></i></button>
							</div>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Turno Maestras
	public function fnListarTurnoControlador()
	{
		$tabla = "";
		$datos = maestrosModelo::fnListarTurno();

		$tabla .= '<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
							<th>#</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Estado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
		$contador = 1;
		foreach ($datos as $rows) {
			$tabla .= '
					<tr class="text-center" >
						<td>' . $contador . '</td>
						<td>' . $rows['codigo'] . '</td>
						<td>' . $rows['nombre'] . '</td>
						<td>' . ($rows['estado'] == 1 ? 'Operativo' : 'Inoperativo') . '</td>
						<td>
							<div class="row" style="margin: 0px">
								<button class="btn btn-info btnEditarMaestro"
									data-id="' . $rows['codigo'] . '"
									data-maestro="turno"
									data-accion="obtener_turno">
									<i class="fas fa-edit"></i>
								</button>
								<button class="btn btn-warning btnEliminarMaestro" data-id="' . $rows['codigo'] . '"
								data-maestro="turno" data-accion="eliminar_turno"><i class="far fa-trash-alt"></i></button>
							</div>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Ubicacion Maestras
	public function fnListarUbicacionControlador()
	{
		$tabla = "";
		$datos = maestrosModelo::fnListarUbicacion();

		$tabla .= '<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
							<th>#</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Estado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
		$contador = 1;
		foreach ($datos as $rows) {
			$tabla .= '
					<tr class="text-center" >
						<td>' . $contador . '</td>
						<td>' . $rows['codigo'] . '</td>
						<td>' . $rows['nombre'] . '</td>
						<td>' . ($rows['estado'] == 1 ? 'Operativo' : 'Inoperativo') . '</td>
						<td>
							<div class="row" style="margin: 0px">
								<button class="btn btn-info btnEditarMaestro"
									data-id="' . $rows['codigo'] . '"
									data-maestro="ubicacion"
									data-accion="obtener_ubicacion">
									<i class="fas fa-edit"></i>
								</button>
								<button class="btn btn-warning btnEliminarMaestro" data-id="' . $rows['codigo'] . '"
								data-maestro="ubicacion" data-accion="eliminar_ubicacion"><i class="far fa-trash-alt"></i></button>
							</div>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Usuario Maestras
	public function fnListarUsuarioControlador()
	{
		$tabla = "";
		$datos = maestrosModelo::fnListarUbicacion(); //CAMBIAR A LISTA USUARIO

		$tabla .= '<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
							<th>#</th>
							<th>Codigo</th>
							<th>Usuario</th>
							<th>Nombres y Apellidos</th>
							<th>Estado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
		$contador = 1;
		foreach ($datos as $rows) {
			$tabla .= '
					<tr class="text-center" >
						<td>' . $contador . '</td>
						<td>' . $rows['codigo'] . '</td>
						<td>' . $rows['usuario'] . '</td>
						<td>' . $rows['nombres'] . ' ' . $rows['apellidos'] . '</td>
						<td>' . ($rows['estado'] == 1 ? 'Operativo' : 'Inoperativo') . '</td>
						<td>
							<div class="row" style="margin: 0px">
								<button class="btn btn-info btnEditarMaestro"
									data-id="' . $rows['codigo'] . '"
									data-maestro="ubicacion"
									data-accion="obtener_ubicacion">
									<i class="fas fa-edit"></i>
								</button>
								<button class="btn btn-warning btnEliminarMaestro" data-id="' . $rows['codigo'] . '"
								data-maestro="usuario" data-accion="eliminar_usuario"><i class="far fa-trash-alt"></i></button>
							</div>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Zona Maestras
	public function fnListarZonaControlador()
	{
		$tabla = "";
		$datos = maestrosModelo::fnListarZona();

		$tabla .= '<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
							<th>#</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Tunel</th>
							<th>Estado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
		$contador = 1;
		foreach ($datos as $rows) {
			$tabla .= '
					<tr class="text-center" >
						<td>' . $contador . '</td>
						<td>' . $rows['codigo'] . '</td>
						<td>' . $rows['nombre'] . '</td>
						<td>' . $rows['tunel'] . '</td>
						<td>' . ($rows['estado'] == 1 ? 'Operativo' : 'Inoperativo') . '</td>
						<td>
							<div class="row" style="margin: 0px">
								<button class="btn btn-info btnEditarMaestro"
									data-id="' . $rows['codigo'] . '"
									data-maestro="zona"
									data-accion="obtener_zona">
									<i class="fas fa-edit"></i>
								</button>
								<button class="btn btn-warning btnEliminarMaestro" data-id="' . $rows['codigo'] . '"
								data-maestro="zona" data-accion="eliminar_zona"><i class="far fa-trash-alt"></i></button>
							</div>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	public function paginador_usuario_controlador($pagina, $registros, $privilegio, $id, $url, $busqueda)
	{

		$pagina = mainModelo::limpiar_cadena($pagina);
		$registros = mainModelo::limpiar_cadena($registros);
		$privilegio = mainModelo::limpiar_cadena($privilegio);
		$id = mainModelo::limpiar_cadena($id);

		$url = mainModelo::limpiar_cadena($url);
		$url = serverUrl . $url . "/";

		$busqueda = mainModelo::limpiar_cadena($busqueda);
		$tabla = "";

		$pagina = (isset($pagina) && $pagina > 0) ? (int) $pagina : 1;
		$inicio = ($pagina > 0) ? (($pagina * $registros) - $registros) : 0;

		if (isset($busqueda) && $busqueda != "") {
			$consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM area WHERE ((usuario_id!='$id' AND usuario_id!='1') AND (usuario_dni LIKE '%$busqueda%' OR usuario_nombre LIKE '%$busqueda%' OR usuario_apellido LIKE '%$busqueda%' OR usuario_telefono LIKE '%$busqueda%' OR usuario_email LIKE '%$busqueda%' OR usuario_usuario LIKE '%$busqueda%')) ORDER BY usuario_nombre ASC LIMIT $inicio,$registros";
		} else {
			$consulta = "SELECT SQL_CALC_FOUND_ROWS * FROM area  ORDER BY nombre ASC";
		}

		$conexion = mainModelo::fnConectar();

		$datos = $conexion->query($consulta);
		$datos = $datos->fetchAll();

		$total = $conexion->query("SELECT FOUND_ROWS()");
		$total = (int) $total->fetchColumn();

		$Npaginas = ceil($total / $registros);


		$tabla .= '<div class="table-responsive">
				<table class="table table-dark table-sm">
					<thead>
						<tr class="text-center roboto-medium">
							<th>#</th>
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Abreviatura</th>
							<th>Estado</th>
							<th></th>
						</tr>
					</thead>
					<tbody>';
		if ($total >= 1 && $pagina <= $Npaginas) {
			$contador = $inicio + 1;
			$reg_inicio = $inicio + 1;
			foreach ($datos as $rows) {
				$tabla .= '
					<tr class="text-center" >
						<td>' . $contador . '</td>
						<td>' . $rows['codigo'] . '</td>
						<td>' . $rows['nombre'] . '</td>
						<td>' . $rows['abreviatura'] . '</td>
						<td>' . ($rows['estado'] == 1 ? 'Operativo' : 'Inoperativo') . '</td>
						<td>
							<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
							<a href="" class="btn btn-warning"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>';
				$contador++;
			}
			$reg_final = $contador - 1;
		} else {
			if ($total >= 1) {
				$tabla .= '<tr class="text-center" ><td colspan="9">
					<a href="' . $url . '" class="btn btn-raised btn-primary btn-sm">Haga clic aca para recargar el listado</a>
					</td></tr>';
			} else {
				$tabla .= '<tr class="text-center" ><td colspan="9">No hay registros en el sistema</td></tr>';
			}
		}

		$tabla .= '</tbody></table></div>';

		if ($total >= 1 && $pagina <= $Npaginas) {
			$tabla .= '<p class="text-right">Mostrando usuario ' . $reg_inicio . ' al ' . $reg_final . ' de un total de ' . $total . '</p>';

			$tabla .= mainModelo::paginador_tablas($pagina, $Npaginas, $url, 7);
		}

		return $tabla;
	} /* Fin controlador */

	public function fnObtenerAreaControlador()
	{
		$id = $_POST['id'] ?? 0;
		$datos = maestrosModelo::fnObtenerArea($id);
		echo json_encode($datos ?: []);
	}
	public function fnAreaControlador()
	{
		$esEdicion = !empty($_POST['id_area']);
		$datos = [
			"Codigo" => $_POST['id_area'],
			"Nombre" => $_POST['m_area_nombre'],
			"Abreviatura" => $_POST['m_area_abreviatura'],
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];
		$resultado = $esEdicion
			? maestrosModelo::fnActualizarArea($datos)
			: maestrosModelo::fnRegistrarArea($datos);
		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => $esEdicion ? "Area actualizado" : "Area registrado",
			"Texto" => "$resultado[1]",
			"Tipo" => "success",
			"modal" => "modalMaestro_area"
		];
		echo json_encode($alerta);
	}
	public function fnEliminarAreaControlador($id)
	{
		$eliminarArea = maestrosModelo::fnEliminarArea($id);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Area eliminada",
			"Texto" => "$eliminarArea[1]",
			"Tipo" => "success",
			"modal" => "agregarAreaMaestra"
		];
		echo json_encode($alerta);
	}
	// Modelo para agregar Cargo Maestra
	public function fnCargoControlador()
	{
		$esEdicion = !empty($_POST['id_cargo']);
		$datos = [
			"Codigo" => $_POST['id_cargo'],
			"Nombre" => $_POST['m_cargo_nombre'],
			"Descripcion" => $_POST['m_cargo_descripcion'],
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];
		$resultado = $esEdicion
			? maestrosModelo::fnActualizarCargo($datos)
			: maestrosModelo::fnRegistrarCargo($datos);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => $esEdicion ? "Cargo actualizado" : "Cargo registrado",
			"Texto" => "$resultado[1]",
			"Tipo" => "success",
			"modal" => "agregarCargoMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnObtenerCargoControlador()
	{
		$id = $_POST['id'] ?? 0;
		$datos = maestrosModelo::fnObtenerCargo($id);
		echo json_encode($datos ?: []);
	}
	public function fnEliminarCargoControlador($id)
	{
		$eliminarCargo = maestrosModelo::fnEliminarCargo($id);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Cargo eliminada",
			"Texto" => "$eliminarCargo[1]",
			"Tipo" => "success",
			"modal" => "agregarCargoMaestra"
		];
		echo json_encode($alerta);
	}
	// Modelo para agregar Personal Maestra
	public function fnPersonalControlador()
	{
		$esEdicion = !empty($_POST['id_personal']);
		$datos = [
			"Codigo" => $_POST['id_personal'],
			"CodigoArea" => $_POST['m_personal_area'],
			"CodigoCargo" => $_POST['m_personal_cargo'],
			"Nombres" => $_POST['m_personal_nombres'],
			"ApellidoPa" => $_POST['m_personal_apepa'],
			"ApellidoMa" => $_POST['m_personal_apema'],
			"FechaNacimiento" => $_POST['m_personal_fechaNacimiento'],
			"Correo" => $_POST['m_personal_correo'],
			"Celular" => $_POST['m_personal_celular'],
			"DNI" => $_POST['m_personal_dni'],
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];
		// print_r($datos);
		$resultado = $esEdicion
			? maestrosModelo::fnActualizarPersonal($datos)
			: maestrosModelo::fnRegistrarPersonal($datos);
		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => $esEdicion ? "Personal actualizado" : "Personal registrado",
			"Texto" => "$resultado[1]",
			"Tipo" => "success",
			"modal" => "agregarPersonalMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnObtenerPersonalControlador()
	{
		$id = $_POST['id'] ?? 0;
		$datos = maestrosModelo::fnObtenerPersonal($id);
		echo json_encode($datos ?: []);
	}
	public function fnEliminarPersonalControlador()
	{
		$id = $_POST['id'];
		$personal = maestrosModelo::fnEliminarPersonal($id);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Personal eliminado",
			"Texto" => "$personal[1]",
			"Tipo" => "success",
			"modal" => "agregarPersonalMaestra"
		];
		echo json_encode($alerta);
	}
	// Modelo para agregar Sentido Maestra
	public function fnSentidoControlador()
	{
		$esEdicion = !empty($_POST['id_sentido']);
		$datos = [
			"Codigo" => $_POST['id_sentido'],
			"Nombre" => $_POST['m_sentido_nombre'],
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];
		$resultado = $esEdicion
			? maestrosModelo::fnActualizarSentido($datos)
			: maestrosModelo::fnRegistrarSentido($datos);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => $esEdicion ? "Sentido actualizado" : "Sentido registrado",
			"Texto" => "$resultado[1]",
			"Tipo" => "success",
			"modal" => "agregarSentidoMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnObtenerSentidoControlador()
	{
		$id = $_POST['id'] ?? 0;
		$datos = maestrosModelo::fnObtenerSentido($id);
		echo json_encode($datos ?: []);
	}
	public function fnEliminarSentidoControlador($id)
	{
		// $id = $_POST['id'];
		$sentido = maestrosModelo::fnEliminarSentido($id);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Sentido eliminado",
			"Texto" => "$sentido[1]",
			"Tipo" => "success",
			"modal" => "agregarSentidoMaestra"
		];
		echo json_encode($alerta);
	}
	// Modelo para agregar Sistema Maestra
	public function fnSistemaControlador()
	{
		$esEdicion = !empty($_POST['id_sistema']);
		$datos = [
			"Codigo" => $_POST['id_sistema'],
			"Nombre" => $_POST['m_sistema_nombre'],
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];
		$resultado = $esEdicion
			? maestrosModelo::fnActualizarSistema($datos)
			: maestrosModelo::fnRegistrarSistema($datos);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => $esEdicion ? "Sistema actualizado" : "Sistema registrado",
			"Texto" => "$resultado[1]",
			"Tipo" => "success",
			"modal" => "agregarSistemaMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnObtenerSistemaControlador()
	{
		$id = $_POST['id'] ?? 0;
		$datos = maestrosModelo::fnObtenerSistema($id);
		echo json_encode($datos ?: []);
	}
	public function fnEliminarSistemaControlador($id)
	{
		// $id = $_POST['id'];
		$sistema = maestrosModelo::fnEliminarSistema($id);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Sistema eliminado",
			"Texto" => "$sistema[1]",
			"Tipo" => "success",
			"modal" => "agregarSistemaMaestra"
		];
		echo json_encode($alerta);
	}
	// Modelo para agregar Tipo de Vehiculo Maestra
	public function fnTipoVehiculoControlador()
	{
		$esEdicion = !empty($_POST['id_tipoVehiculo']);
		$datos = [
			"Codigo" => $_POST['id_tipoVehiculo'],
			"Nombre" => $_POST['m_tipoVehiculo_nombre'],
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];
		$resultado = $esEdicion
			? maestrosModelo::fnActualizarTipoVehiculo($datos)
			: maestrosModelo::fnRegistrarTipoVehiculo($datos);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => $esEdicion ? "Tipo de vehiculo actualizado" : "Tipo de vehiculo registrado",
			"Texto" => "$resultado[1]",
			"Tipo" => "success",
			"modal" => "agregarTipoVehiculoMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnObtenerTipoVehiculoControlador()
	{
		$id = $_POST['id'] ?? 0;
		$datos = maestrosModelo::fnObtenerTipoVehiculo($id);
		echo json_encode($datos ?: []);
	}
	public function fnEliminarTipoVehiculoControlador($id)
	{
		// $id = $_POST['id'];
		$tipoVehiculo = maestrosModelo::fnEliminarTipoVehiculo($id);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Tipo de Vehiculo eliminado",
			"Texto" => "$tipoVehiculo[1]",
			"Tipo" => "success",
			// "modal" => "agregarTipoVehiculoMaestra"
		];
		echo json_encode($alerta);
	}
	// Modelo para agregar Turno Maestra
	public function fnTurnoControlador()
	{
		$esEdicion = !empty($_POST['id_turno']);
		$datos = [
			"Codigo" => $_POST['id_turno'],
			"Nombre" => $_POST['m_turno_nombre'],
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];
		$resultado = $esEdicion
			? maestrosModelo::fnActualizarTurno($datos)
			: maestrosModelo::fnRegistrarTurno($datos);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => $esEdicion ? "Turno actualizado" : "Turno registrado",
			"Texto" => "$resultado[1]",
			"Tipo" => "success",
			"modal" => "agregarTurnoMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnObtenerTurnoControlador()
	{
		$id = $_POST['id'] ?? 0;
		$datos = maestrosModelo::fnObtenerTurno($id);
		echo json_encode($datos ?: []);
	}
	public function fnEliminarTurnoControlador($id)
	{
		// $id = $_POST['id'];
		$turno = maestrosModelo::fnEliminarTurno($id);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Turno eliminado",
			"Texto" => "$turno[1]",
			"Tipo" => "success",
			"modal" => "agregarTurnoMaestra"
		];
		echo json_encode($alerta);
	}
	// Modelo para agregar Ubicacion Maestra
	public function fnUbicacionControlador()
	{
		$esEdicion = !empty($_POST['id_ubicacion']);
		$datos = [
			"Codigo" => $_POST['id_ubicacion'],
			"Nombre" => $_POST['m_ubicacion_nombre'],
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];
		$resultado = $esEdicion
			? maestrosModelo::fnActualizarUbicacion($datos)
			: maestrosModelo::fnRegistrarUbicacion($datos);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => $esEdicion ? "Ubicación actualizado" : "Ubicación registrado",
			"Texto" => "$resultado[1]",
			"Tipo" => "success",
			"modal" => "agregarUbicacionMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnObtenerUbicacionControlador()
	{
		$id = $_POST['id'] ?? 0;
		$datos = maestrosModelo::fnObtenerUbicacion($id);
		echo json_encode($datos ?: []);
	}
	public function fnEliminarUbicaciconControlador($id)
	{
		// $id = $_POST['id'];
		$ubicacion = maestrosModelo::fnEliminarUbicacion($id);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Ubicación eliminada",
			"Texto" => "$ubicacion[1]",
			"Tipo" => "success",
			"modal" => "agregarUbicacionMaestra"
		];
		echo json_encode($alerta);
	}
	// Modelo para agregar Usuario Maestra
	public function fnUsuarioControlador()
	{
		$esEdicion = !empty($_POST['id_usuario']);
		// $resultado = $esEdicion
		// 	? maestrosModelo::fnActualizarUsuario($datos)
		// 	: maestrosModelo::fnRegistrarUsuario($datos);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => $esEdicion ? "Usuario actualizado" : "Usuario registrado",];
		echo json_encode($alerta);
	}
	public function fnObtenerUsuarioControlador()
	{
		$id = $_POST['id'] ?? 0;
		$datos = maestrosModelo::fnObtenerUsuario($id);
		echo json_encode($datos ?: []);
	}
	public function fnEliminarUsuarioControlador($id)
	{
		// $id = $_POST['id'];
		// $sentido = maestrosModelo::fnEliminarUsuario($id);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Usuario eliminado",
			// "Texto" => "$sentido[1]",
			"Tipo" => "success",
			"modal" => "agregarUsuarioMaestra"
		];
		echo json_encode($alerta);
	}
	// Modelo para agregar Zona Maestra
	public function fnZonaControlador()
	{
		$esEdicion = !empty($_POST['id_zona']);
		$datos = [
			"Codigo" => $_POST['id_zona'],
			"Nombre" => $_POST['m_zona_nombre'],
			"CodigoSentido" => $_POST['m_zona_sentido'],
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];
		$resultado = $esEdicion
			? maestrosModelo::fnActualizarZona($datos)
			: maestrosModelo::fnRegistrarZona($datos);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => $esEdicion ? "Zona actualizado" : "Zona registrado",
			"Texto" => "$resultado[1]",
			"Tipo" => "success",
			"modal" => "agregarZonaMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnObtenerZonaControlador()
	{
		$id = $_POST['id'] ?? 0;
		$datos = maestrosModelo::fnObtenerZona($id);
		echo json_encode($datos ?: []);
	}
	public function fnEliminarZonaControlador($id)
	{
		// $id = $_POST['id'];
		$zona = maestrosModelo::fnEliminarZona($id);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Zona eliminada",
			"Texto" => "$zona[1]",
			"Tipo" => "success",
			"modal" => "agregarZonaMaestra"
		];
		echo json_encode($alerta);
	}

	// public function fnProcesarAjaxAreas()
	// {
	// 	if ($_POST['accion'] == 'listar_areas') {
	// 		print_r("LISTA");
	// 		echo $this->fnListarMaestroAreas();
	// 		exit();
	// 	}

	// 	if ($_POST['accion'] == 'registrar_area') {
	// 		$nombre = trim($_POST['maestro_area_nombre'] ?? '');
	// 		if ($nombre == '') {
	// 			echo "El nombre del área es obligatorio.";
	// 			exit();
	// 		}
	// 		// $nombre = $_POST['maestro_area_nombre'];
	// 		$abreviatura = $_POST['maestro_area_abreviatura'];
	// 		print_r("ENTRO");
	// 		// Aquí deberías tener un modelo que inserte en la base de datos.
	// 		require_once "./modelos/maestrosModelo.php";
	// 		$datos_area = new stdClass();
	// 		$datos_area->nombre = $nombre;
	// 		$datos_area->abreviatura = $abreviatura;

	// 		// $resultado = maestrosModelo::fnRegistrarArea($datos_area);

	// 		echo $resultado ? "Área registrada correctamente." : "Error al registrar.";
	// 		exit();
	// 	}
	// }
}





// DELIMITER $$

// CREATE PROCEDURE sp_actualizarAreaMaestra (
//     IN p_codigo VARCHAR(9),
//     IN p_nombre VARCHAR(100),
//     IN p_abreviatura VARCHAR(50),
//     IN p_estado VARCHAR(1),
//     IN p_user VARCHAR(100)
// )
// BEGIN
//     UPDATE area
//     SET 
//         nombre = p_nombre,
//         abreviatura = p_abreviatura,
//         estado = p_estado,
//         frupdate = NOW(),               -- Fecha/hora actual
//         userupdate = p_user     -- Usuario que ejecuta
//     WHERE codigo = p_codigo;
// END$$

// DELIMITER ;
