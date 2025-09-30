
<div class="full-box page-header">
	<h3 class="text-left">
		<i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Áreas
	</h3>
</div>

<div class="container-fluid">
	<ul class="full-box list-unstyled page-nav-tabs">
		<li>
			<div class="pull-right">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarAreaMaestra"><i class="fa fa-plus"></i> Agregar</button>
			</div>
		</li>
		<li>
			<a href="<?php echo serverUrl; ?>user-search/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR </a>
		</li>
	</ul>
</div>

<!-- Contenedor de tabla dinámica -->
<div id="tabla-area" class="container-fluid"></div>

<!-- Modal de Registro (simplificado para ejemplo) -->
<div class="modal fade" id="agregarAreaMaestra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="formAreaMaestra" autocomplete="off" method="POST">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registrar Área</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" name="nombre_area" class="form-control" placeholder="Nombre del Área" required>
          <input type="hidden" name="accion" value="registrar_area">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    cargarTablaAreas();

    document.getElementById('formAreaMaestra').addEventListener('submit', async function(e) {
        e.preventDefault();
        const form = e.target;
        const data = new FormData(form);
        
        const response = await fetch('ajax/maestroAjax.php', {
            method: 'POST',
            body: data
        });

        const res = await response.text();

        // Resetear y cerrar modal
        form.reset();
        $('#agregarAreaMaestra').modal('hide');

        // Recargar tabla
        cargarTablaAreas();
    });
});

function cargarTablaAreas() {
    fetch('ajax/maestroAjax.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'accion=listar_areas'
    })
    .then(res => res.text())
    .then(html => {
        document.getElementById('tabla-area').innerHTML = html;
    });
}
</script>
