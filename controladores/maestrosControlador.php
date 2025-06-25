<?php
if ($peticionAjax) {
	require_once "../modelos/maestrosModelo.php";
} else {
	require_once "./modelos/maestrosModelo.php";
}

class maestrosControlador extends maestrosModelo
{

	// agregar modelo maestros
	// public function fnAgregarMaestrosControlador() {}


	//Listar Tabla Areas Maestras
	public function fnListarMaestroAreas()
	{
		$tabla = "";
		$datos = maestrosModelo::fnListarAreaMaestra();

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
								<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
							
								<form onsubmit="return eliminarArea()" id="formEliminarArea" action="'.serverUrl.'ajax/maestroAjax.php" method="POST" data-form="eliminar_area" autocomplete="off">
									<input type="hidden" name="maestro_area_eliminar_id" value="'.$rows['codigo'].'">
									<input type="hidden" name="accion" value="eliminar_area">
									<input type="hidden" name="tipoMaestro" value="area">
									<button type="submit" class="btn btn-warning"><i class="far fa-trash-alt"></i></button>
								</form>
							
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
	public function fnListarMaestroCargos()
	{
		$tabla = "";
		$consulta = "SELECT * FROM cargo ORDER BY nombre ASC";
		$conexion = mainModelo::fnConectar();

		$datos = $conexion->query($consulta);
		$datos = $datos->fetchAll();

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
							<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
							<a href="" class="btn btn-warning"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Personal Maestras
	public function fnListarMaestroPersonal()
	{
		$tabla = "";
		$consulta = "SELECT * FROM personal  ORDER BY nombres ASC";
		$conexion = mainModelo::fnConectar();

		$datos = $conexion->query($consulta);
		$datos = $datos->fetchAll();

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
							<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
							<a href="" class="btn btn-warning"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Sentido Maestras
	public function fnListarMaestroSentido()
	{
		$tabla = "";
		$consulta = "SELECT * FROM sentido  ORDER BY nombre ASC";
		$conexion = mainModelo::fnConectar();

		$datos = $conexion->query($consulta);
		$datos = $datos->fetchAll();

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
							<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
							<a href="" class="btn btn-warning"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Sistema Maestras
	public function fnListarMaestroSistema()
	{
		$tabla = "";
		$consulta = "SELECT * FROM sistemas  ORDER BY nombre ASC";
		$conexion = mainModelo::fnConectar();

		$datos = $conexion->query($consulta);
		$datos = $datos->fetchAll();

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
							<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
							<a href="" class="btn btn-warning"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Tipo Vehiculo Maestras
	public function fnListarMaestroTipoVehiculo()
	{
		$tabla = "";
		$consulta = "SELECT * FROM tipo_vehiculo ORDER BY nombre ASC";
		$conexion = mainModelo::fnConectar();

		$datos = $conexion->query($consulta);
		$datos = $datos->fetchAll();

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
							<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
							<a href="" class="btn btn-warning"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Turno Maestras
	public function fnListarMaestroTurno()
	{
		$tabla = "";
		$consulta = "SELECT * FROM turno  ORDER BY nombre ASC";
		$conexion = mainModelo::fnConectar();

		$datos = $conexion->query($consulta);
		$datos = $datos->fetchAll();

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
							<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
							<a href="" class="btn btn-warning"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Ubicacion Maestras
	public function fnListarMaestroUbicacion()
	{
		$tabla = "";
		$consulta = "SELECT * FROM ubicacion  ORDER BY nombre ASC";
		$conexion = mainModelo::fnConectar();

		$datos = $conexion->query($consulta);
		$datos = $datos->fetchAll();

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
							<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
							<a href="" class="btn btn-warning"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Usuario Maestras
	public function fnListarMaestroUsuario()
	{
		$tabla = "";
		$consulta = "SELECT * FROM usuarios ORDER BY estado DESC, nombres ASC";
		$conexion = mainModelo::fnConectar();

		$datos = $conexion->query($consulta);
		$datos = $datos->fetchAll();

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
							<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
							<a href="" class="btn btn-warning"><i class="far fa-trash-alt"></i></a>
						</td>
					</tr>';
			$contador++;
		}

		$tabla .= '</tbody></table></div>';

		return $tabla;
	} /* Fin controlador */

	//Listar Tabla Zona Maestras
	public function fnListarMaestroZona()
	{
		$tabla = "";
		$consulta = "SELECT z.codigo, z.nombre, z.estado, s.nombre tunel FROM zona as z INNER JOIN sentido as s ON s.codigo = z.sentido_codigo  ORDER BY nombres ASC";
		$conexion = mainModelo::fnConectar();

		$datos = $conexion->query($consulta);
		$datos = $datos->fetchAll();

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
							<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
							<a href="" class="btn btn-warning"><i class="far fa-trash-alt"></i></a>
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

	// Modelo para agregar Area Maestra
	public function fnAgregarAreaMaestraControlador()
	{
		// echo "console.log('entro a CONTROLADOR')";
		$nombre = $_POST['maestro_area_nombre'];
		$abreviatura = $_POST['maestro_area_abreviatura'];

		$datos_area = [
			"Codigo" => "CODARE007",
			"Nombre" => $nombre,
			"Abreviatura" => $abreviatura,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarArea = maestrosModelo::fnRegistrarArea($datos_area);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Area registrada",
			"Texto" => "$agregarArea[1]",
			"Tipo" => "success",
			"modal" => "agregarAreaMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnEditarAreaControlador(){
		$id = $_POST['maestro_area_id'];
		$nombre = $_POST['maestro_area_nombre'];
		$abreviatura = $_POST['maestro_area_abreviatura'];
		$datos_area = [
			"Codigo" => $id,
			"Nombre" => $nombre,
			"Abreviatura" => $abreviatura,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$editarArea = maestrosModelo::fnEditarArea($id, $datos_area);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Area actualizada",
			"Texto" => "$editarArea[1]",
			"Tipo" => "success",
			"modal" => "agregarAreaMaestra"
		];
		echo json_encode($alerta);

	}
	public function fnEliminarAreaControlador($id){
		$id = $_POST['maestro_area_eliminar_id'];
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
	public function fnAgregarCargoMaestraControlador()
	{
		$nombre = $_POST['m_cargo_nombre'];
		$descripcion = $_POST['m_cargo_descripcion'];

		$datos = [
			"Codigo" => "CODARE007",
			"Nombre" => $nombre,
			"Descripcion" => $descripcion,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarCargo = maestrosModelo::fnAgregarCargoMaestra($datos);
		$this->fnListarMaestroCargos();
		// echo json_encode($alerta);
	}
	// Modelo para agregar Personal Maestra
	public function fnAgregarPersonalMaestraControlador()
	{
		$area = $_POST['m_personal_area'];
		$cargo = $_POST['m_personal_cargo'];
		$nombres = $_POST['m_personal_nombres'];
		$apellidopa = $_POST['m_personal_apepa'];
		$apellidoma = $_POST['m_personal_apema'];
		$fechaNacimiento = $_POST['m_personal_fechaNacimiento'];
		$correo = $_POST['m_personal_correo'];
		$celular = $_POST['m_personal_celular'];
		$dni = $_POST['m_personal_dni'];

		$datos = [
			"Area" => $area,
			"Cargo" => $cargo,
			"Nombres" => $nombres,
			"ApellidoPa" => $apellidopa,
			"ApellidoMa" => $apellidoma,
			"FechaNacimiento" => $fechaNacimiento,
			"Correo" => $correo,
			"Celular" => $celular,
			"DNI" => $dni,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarPersonal = maestrosModelo::fnAgregarPersonalMaestra($datos);
		$this->fnListarMaestroPersonal();
		echo `<script>alert("¡'.$agregarPersonal[1].'"!);</script>`;
	}
	// Modelo para agregar Sentido Maestra
	public function fnAgregarSentidoMaestraControlador()
	{
		$nombre = $_POST['m_sentido_nombre'];

		$datos = [
			"Nombre" => $nombre,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarSentido = maestrosModelo::fnAgregarSentidoMaestra($datos);
		$this->fnListarMaestroSentido();
		echo `<script>alert("¡'.$agregarSentido[1].'"!);</script>`;
	}
	// Modelo para agregar Sistema Maestra
	public function fnAgregarSistemaMaestraControlador()
	{
		$nombre = $_POST['m_sistema_nombre'];

		$datos = [
			"Nombre" => $nombre,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarSistema = maestrosModelo::fnAgregarSistemaMaestra($datos);
		$this->fnListarMaestroSistema();
		echo `<script>alert("¡'.$agregarSistema[1].'"!);</script>`;
	}
	// Modelo para agregar Tipo de Vehiculo Maestra
	public function fnAgregarTipoVehiculoMaestraControlador()
	{
		$nombre = $_POST['m_tipovehiculo_nombre'];

		$datos = [
			"Nombre" => $nombre,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarTipoVehiculo = maestrosModelo::fnAgregarTipoVehiculoMaestra($datos);
		$this->fnListarMaestroTipoVehiculo();
		echo `<script>alert("¡'.$agregarTipoVehiculo[1].'"!);</script>`;
	}
	// Modelo para agregar Turno Maestra
	public function fnAgregarTurnoMaestraControlador()
	{
		$nombre = $_POST['m_turno_nombre'];

		$datos = [
			"Nombre" => $nombre,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarTurno = maestrosModelo::fnAgregarTurnoMaestra($datos);
		$this->fnListarMaestroTurno();
		echo `<script>alert("¡'.$agregarTurno[1].'"!);</script>`;
	}
	// Modelo para agregar Ubicacion Maestra
	public function fnAgregarUbicacionMaestraControlador()
	{
		$nombre = $_POST['m_ubicacion_nombre'];

		$datos = [
			"Nombre" => $nombre,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarUbicacion = maestrosModelo::fnAgregarUbicacionMaestra($datos);
		$this->fnListarMaestroUbicacion();
		echo `<script>alert("¡'.$agregarUbicacion[1].'"!);</script>`;
	}
	// Modelo para agregar Usuario Maestra
	public function fnAgregarUsuarioMaestraControlador() {}
	// Modelo para agregar Zona Maestra
	public function fnAgregarZonaMaestraControlador()
	{
		$nombre = $_POST['m_zona_nombre'];
		$sentido = $_POST['m_zona_sentido'];

		$datos = [
			"Nombre" => $nombre,
			"Sentido" => $sentido,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarZona = maestrosModelo::fnAgregarZonaMaestra($datos);
		$this->fnListarMaestroZona();
		echo `<script>alert("¡'.$agregarZona[1].'"!);</script>`;
	}

	public function fnProcesarAjaxAreas()
	{
		if ($_POST['accion'] == 'listar_areas') {
			print_r("LISTA");
			echo $this->fnListarMaestroAreas();
			exit();
		}

		if ($_POST['accion'] == 'registrar_area') {
			$nombre = trim($_POST['maestro_area_nombre'] ?? '');
			if ($nombre == '') {
				echo "El nombre del área es obligatorio.";
				exit();
			}
			// $nombre = $_POST['maestro_area_nombre'];
			$abreviatura = $_POST['maestro_area_abreviatura'];
			print_r("ENTRO");
			// Aquí deberías tener un modelo que inserte en la base de datos.
			require_once "./modelos/maestrosModelo.php";
			$datos_area = new stdClass();
			$datos_area->nombre = $nombre;
			$datos_area->abreviatura = $abreviatura;

			// $resultado = maestrosModelo::fnAgregarAreaMaestra($datos_area);

			echo $resultado ? "Área registrada correctamente." : "Error al registrar.";
			exit();
		}
	}
}
