<div class="full-box page-header">
  <h3 class="text-left">
    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Tipo de Vehículos
  </h3>
  <!-- <p class="text-justify">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum rerum animi natus beatae ex. Culpa blanditiis tempore amet alias placeat, obcaecati quaerat ullam, sunt est, odio aut veniam ratione.
	</p> -->
</div>

<div class="container-fluid">
  <ul class="full-box list-unstyled page-nav-tabs">
    <li>
      <div class="pull-right">
        <button id="btnTipoVehiculoMaestra" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalMaestro_tipoVehiculo"><i class="fa fa-plus"></i> Agregar</button>
      </div>
    </li>
    <li>
      <a href="<?php echo serverUrl; ?>user-search/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR</a>
    </li>
  </ul>
</div>

<div id="tabla-tipoVehiculo" class="container-fluid"></div>

<div class="modal fade" id="modalMaestro_tipoVehiculo" data-backdrop="static" data-keyboard="false" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <form id="formTipoVehiculoMaestra" class="formMaestro" action="<?php echo serverUrl; ?>ajax/maestroAjax.php" autocomplete="off" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><i class="fa fa-book"></i> Registrar Tipo de Vehículo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nombre:</label> 
                <input type="text" name="m_tipoVehiculo_nombre" class="form-control" required>
                <input type="hidden" name="accion" value="registrar_tipoVehiculo">
                <input type="hidden" name="maestro" value="tipoVehiculo">
                <input type="hidden" name="id_tipoVehiculo">
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" name="btnMaestroTipoVehiculo" value="ok" class="btn btn-primary">Agregar</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('formTipoVehiculoMaestra');
    fnTableListaMaestro('listar_tipoVehiculo', 'tipoVehiculo');

    document.getElementById('btnTipoVehiculoMaestra')
      .addEventListener('click', () => {
        form.reset();
        form.id_tipoVehiculo.value = ''; // sin id → alta
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
					accion: 'obtener_tipoVehiculo',
					maestro: 'tipoVehiculo',
					id: id
				})
			});
			const data = await res.json(); //-> Obtiene los datos y lo convierte en JSON

			if (!data) return Swal.fire('Error', 'Hubo un error al traer el registro seleccionado', 'error'); //-> ERROR, en caso de que no traiga datos mande el error
      
			/* Relleno campos del modal */
			form.id_tipoVehiculo.value = data.codigo;
			form.m_tipoVehiculo_nombre.value = data.nombre;
			// … los demás selects / inputs …

			$('#modalMaestro_tipoVehiculo').modal('show');
		});
  });
</script>