<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista del Personal
	</h3>
	<!-- <p class="text-justify">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum rerum animi natus beatae ex. Culpa blanditiis tempore amet alias placeat, obcaecati quaerat ullam, sunt est, odio aut veniam ratione.
	</p> -->
</div>

<div class="container-fluid">
	<ul class="full-box list-unstyled page-nav-tabs">
		<li>
			<div class="pull-right">
				<button id="btnPersonalMaestra" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalMaestro_personal"><i class="fa fa-plus"></i> Agregar</button>
			</div>
		</li>
		<li>
			<a href="<?php echo serverUrl; ?>user-search/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR </a>
		</li>
	</ul>
</div>

<div id="tabla-personal" class="container-fluid"></div>

<div class="modal fade" id="modalMaestro_personal" data-backdrop="static" data-keyboard="false" tabindex="-1">
	<div class="modal-dialog modal-lg">
		<form id="formPersonalMaestra" class="formMaestro" action="<?php echo serverUrl; ?>ajax/maestroAjax.php" autocomplete="off" method="POST">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"><i class="fa fa-book"></i> Registrar Personal</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"></span>
					</button>
				</div>
				<div class="modal-body">

					<div class="row">
						<div class="col-md-6 col-12 mb-3">
							<label for="m_personal_area">Area:</label>
							<select id="m_personal_area" name="m_personal_area" class="form-control" required>
								<!-- <option value=""> Cargando... </option> -->
							</select>
							<input type="hidden" name="accion" value="registrar_personal">
							<input type="hidden" name="maestro" value="personal">
							<input type="hidden" name="id_personal">
						</div>
						<div class="col-md-6 col-12 mb-3">
							<label>Nombres Completos:</label>
							<input type="text" name="m_personal_nombres" class="form-control" required>
						</div>
						<div class="col-md-6 col-12 mb-3">
							<label>Apellido Paterno:</label>
							<input type="text" name="m_personal_apepa" class="form-control" required>
						</div>
						<div class="col-md-6 col-12 mb-3">
							<label>Apellido Materno:</label>
							<input type="text" name="m_personal_apema" class="form-control" required>
						</div>
						<div class="col-md-6 col-12 mb-3">
							<label>Dni:</label>
							<input type="text" name="m_personal_dni" class="form-control" required>
						</div>
						<div class="col-md-6 col-12 mb-3">
							<label>Correo Electrónico:</label>
							<input type="email" name="m_personal_correo" class="form-control" required>
						</div>
						<div class="col-md-6 col-12 mb-3">
							<label>Fecha Nacimiento:</label>
							<input type="date" name="m_personal_fechaNacimiento" class="form-control" required>
						</div>
						<div class="col-md-6 col-12 mb-3">
							<label>Celular:</label>
							<input type="number" name="m_personal_celular" class="form-control" required>
						</div>
						<div class="col-md-6 col-12 mb-3">
							<label for="m_personal_cargo">Cargo:</label>
							<select id="m_personal_cargo" name="m_personal_cargo" class="form-control" required>
								<!-- <option value=""> Cargando... </option> -->
							</select>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" name="btnMaestroPersonal" value="ok" class="btn btn-primary">Agregar</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script>
	document.addEventListener('DOMContentLoaded', () => {
		const form = document.getElementById('formPersonalMaestra');
		fnTableListaMaestro('listar_personal', 'personal');
		cargarSelectArea();
		cargarSelectCargo();

		document.getElementById('btnPersonalMaestra')
			.addEventListener('click', () => {
				form.reset();
				form.id_personal.value = ''; // sin id → alta
				// modal.show();
			});

		// Si hace click en cualquier boton de la pagina que haga esto
		document.addEventListener('click', async e => {
			//-> Si no es el boton entonces que no haga nada y salga de este evento
			if (!e.target.closest('.btnEditarMaestro')) return;

			const {
				id
			} = e.target.closest('.btnEditarMaestro').dataset;
			const res = await fetch(urlFromBase('ajax/maestroAjax.php'), {
				method: 'POST',
				body: new URLSearchParams({
					accion: 'obtener_personal',
					maestro: 'personal',
					id: id
				})
			});
			const data = await res.json(); //-> Obtiene los datos y lo convierte en JSON

			if (!data) return Swal.fire('Error', 'Hubo un error al traer el registro seleccionado', 'error'); //-> ERROR, en caso de que no traiga datos mande el error

			/* Relleno campos del modal */
			form.id_personal.value = data.codigo;
			form.m_personal_apepa.value = data.apepat;
			form.m_personal_apema.value = data.apemat;
			form.m_personal_nombres.value = data.nombres;
			form.m_personal_correo.value = data.email;
			form.m_personal_fechaNacimiento.value = (data.fec_nac).split(' ')[0];
			form.m_personal_dni.value = data.dni;
			form.m_personal_celular.value = data.celular;
			form.m_personal_area.value = data.codarea;
			form.m_personal_cargo.value = data.codcargo;
			// … los demás selects / inputs …

			$('#modalMaestro_personal').modal('show');
		});

	});

	function cargarSelectArea() {
		fetch('../../ajax/selectAjax.php?accion=area')
			.then(res => res.json())
			.then(data => {
				const select = document.getElementById('m_personal_area');
				select.innerHTML = '<option value="">-- Seleccione una categoria -- </option>'
				data.forEach(categoria => {
					const option = document.createElement('option');
					option.value = categoria.codigo;
					option.textContent = categoria.nombre
					select.appendChild(option)
				});
				// console.log("AREA:", data);
				// return ;
			});
	}

	function cargarSelectCargo() {
		fetch('../../ajax/selectAjax.php?accion=cargo')
			.then(res => res.json())
			.then(data => {
				const select = document.getElementById('m_personal_cargo');
				select.innerHTML = '<option value=""> -- Seleccione una cargo -- </option>'
				data.forEach(categoria => {
					const option = document.createElement('option');
					option.value = categoria.codigo;
					option.textContent = categoria.nombre;
					option.tagName = categoria.codigo;
					select.appendChild(option)
				});
				// console.log("CARGO:", data);
				// return ;
			});
	}
</script>