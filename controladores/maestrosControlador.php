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
									<button class="btn btn-warning btnEliminar" data-id="'.$rows['codigo'].'"
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
								<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
								<button class="btn btn-warning btnEliminar" data-id="'.$rows['codigo'].'"
								data-maestro="cargo" data-accion="eliminar_cargo"><i class="far fa-trash-alt"></i></button>
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
									<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
									<button class="btn btn-warning btnEliminar" data-id="'.$rows['codigo'].'"
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
									<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
									<button class="btn btn-warning btnEliminar" data-id="'.$rows['codigo'].'"
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
									<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
									<button class="btn btn-warning btnEliminar" data-id="'.$rows['codigo'].'"
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
									<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
									<button class="btn btn-warning btnEliminar" data-id="'.$rows['codigo'].'"
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
									<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
									<button class="btn btn-warning btnEliminar" data-id="'.$rows['codigo'].'"
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
									<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
									<button class="btn btn-warning btnEliminar" data-id="'.$rows['codigo'].'"
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
		$datos = maestrosModelo::fnListarUbicacion();//CAMBIAR A LISTA USUARIO

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
									<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
									<button class="btn btn-warning btnEliminar" data-id="'.$rows['codigo'].'"
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
									<a href="" class="btn btn-success"><i class="fas fa-edit"></i></a>
									<button class="btn btn-warning btnEliminar" data-id="'.$rows['codigo'].'"
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

	// Modelo para agregar Area Maestra
	public function fnRegistrarAreaControlador()
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
	public function fnRegistrarCargoControlador()
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

		$agregarCargo = maestrosModelo::fnRegistrarCargo($datos);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Cargo registrado",
			"Texto" => "$agregarCargo[1]",
			"Tipo" => "success",
			"modal" => "agregarCargoMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnEliminarCargoControlador($id){
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
	public function fnRegistrarPersonalControlador()
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

		$agregarPersonal = maestrosModelo::fnRegistrarPersonal($datos);

		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Personal registrado",
			"Texto" => "$agregarPersonal[1]",
			"Tipo" => "success",
			"modal" => "agregarPersonalMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnEliminarPersonalControlador($id){
		// $id = $_POST['id'];
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
	public function fnRegistrarSentidoControlador()
	{
		$nombre = $_POST['m_sentido_nombre'];

		$datos = [
			"Nombre" => $nombre,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarSentido = maestrosModelo::fnRegistrarSentido($datos);
		
		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Sentido registrado",
			"Texto" => "$agregarSentido[1]",
			"Tipo" => "success",
			"modal" => "agregarSentidoMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnEliminarSentidoControlador($id){
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
	public function fnRegistrarSistemaControlador()
	{
		$nombre = $_POST['m_sistema_nombre'];

		$datos = [
			"Nombre" => $nombre,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarSistema = maestrosModelo::fnRegistrarSistema($datos);
		
		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Sistema registrado",
			"Texto" => "$agregarSistema[1]",
			"Tipo" => "success",
			"modal" => "agregarSistemaMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnEliminarSistemaControlador($id){
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
	public function fnRegistrarTipoVehiculoControlador()
	{
		$nombre = $_POST['m_tipovehiculo_nombre'];

		$datos = [
			"Nombre" => $nombre,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarTipoVehiculo = maestrosModelo::fnRegistrarTipoVehiculo($datos);
		
		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Tipo de Vehiculo registrado",
			"Texto" => "$agregarTipoVehiculo[1]",
			"Tipo" => "success",
			"modal" => "agregarTipoVehiculoMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnEliminarTipoVehiculoControlador($id){
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
	public function fnRegistrarTurnoControlador()
	{
		$nombre = $_POST['m_turno_nombre'];

		$datos = [
			"Nombre" => $nombre,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarTurno = maestrosModelo::fnRegistrarTurno($datos);
		
		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Turno registrado",
			"Texto" => "$agregarTurno[1]",
			"Tipo" => "success",
			"modal" => "agregarTurnoMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnEliminarTurnoControlador($id){
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
	public function fnRegistrarUbicacionControlador()
	{
		$nombre = $_POST['m_ubicacion_nombre'];

		$datos = [
			"Nombre" => $nombre,
			"Estado" => '1',
			"Fecha" => date("Y-m-d H:i:s"),
			"Usuario" => "rvizarreta"
		];

		$agregarUbicacion = maestrosModelo::fnRegistrarUbicacion($datos);
		
		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Ubicación registrada",
			"Texto" => "$agregarUbicacion[1]",
			"Tipo" => "success",
			"modal" => "agregarUbicacionMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnEliminarUbicaciconControlador($id){
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
	public function fnRegistrarUsuarioControlador() {}
	public function fnEliminarUsuarioControlador($id){
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
	public function fnRegistrarZonaControlador()
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

		$agregarZona = maestrosModelo::fnRegistrarZona($datos);
		
		$alerta = [
			"Alerta" => "limpiar",
			"Titulo" => "Zona registrada",
			"Texto" => "$agregarZona[1]",
			"Tipo" => "success",
			"modal" => "agregarZonaMaestra"
		];
		echo json_encode($alerta);
	}
	public function fnEliminarZonaControlador($id){
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
