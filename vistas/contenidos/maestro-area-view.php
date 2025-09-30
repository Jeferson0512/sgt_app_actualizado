<?php 
// require __DIR__."../../../modelos/mainModelo.php";
// $conexion = mainModelo::fnConectar();

// $consulta = "SELECT * FROM area";
// $resultado = $conexion->query($consulta);

// echo __DIR__;
// if ($resultado->num_rows > 0) {
//   // Mostrar los datos
//   while ($fila = $resultado->fetch_assoc()) {
//       echo "ID: " . $fila["id"] . " - Nombre: " . $fila["usuario"] . "\n";
//   }
// } else {
//   echo "0 resultados";
// }

// // Cerrar la conexión
// $conexion->close();


// // conexion.php
// $host = 'localhost'; // Cambia si tu base de datos está en otro servidor
// $usuario = 'root';   // Cambia por tu usuario de MySQL
// $contrasena = ''; // Cambia por tu contraseña de MySQL
// $base_de_datos = 'sgt'; // Cambia por el nombre de tu base de datos

// // Crear conexión
// $conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// // Verificar la conexión
// if ($conexion->connect_error) {
//     die("Conexión fallida: " . $conexion->connect_error);
// }
// echo "Conexión exitosa a la base de datos<br>";
 ?>

<div class="full-box page-header">
  <h3 class="text-left">
    <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Áreas
  </h3>
</div>

<div class="container-fluid">
  <ul class="full-box list-unstyled page-nav-tabs">
    <li>
      <div class="pull-right">
        <button id="btnAreaMaestra" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalMaestro_area"><i class="fa fa-plus"></i> Agregar</button>
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
<div class="modal fade" id="modalMaestro_area" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="formAreaMaestra" class="formMaestro" action="<?php echo serverUrl; ?>ajax/maestroAjax.php" autocomplete="off" method="POST" data-form="save">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registrar Área</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="m_area_nombre" class="form-control" required>
                <!-- <input type="hidden" name="modalAddMaestroArea" value="lleno"> -->
                <input type="hidden" name="accion" value="registrar_area">
                <input type="hidden" name="maestro" value="area">
                <input type="hidden" name="id_area">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Abreviatura:</label>
                <input type="text" name="m_area_abreviatura" class="form-control" required>
              </div>
            </div>
          </div>

          <!-- <input type="text" name="maestro_area_nombre" class="form-control" placeholder="Nombre del Área" required>
          <input type="hidden" name="accion" value="registrar_area"> -->
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
    const form = document.getElementById('formAreaMaestra');
    fnTableListaMaestro('listar_area', 'area');

    document.getElementById('btnAreaMaestra')
      .addEventListener('click', () => {
        form.reset();
        form.id_area.value = ''; // sin id → alta
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
          accion: 'obtener_area',
          maestro: 'area',
          id: id
        })
      });
      const data = await res.json(); //-> Obtiene los datos y lo convierte en JSON

      if (!data) return Swal.fire('Error', 'Hubo un error al traer el registro seleccionado', 'error'); //-> ERROR, en caso de que no traiga datos mande el error

      /* Relleno campos del modal */
      form.id_area.value = data.codigo;
      form.m_area_nombre.value = data.nombre;
      form.m_area_abreviatura.value = data.abreviatura;
      // … los demás selects / inputs …

      $('#modalMaestro_area').modal('show');
    });

  });
  // function fnEditarArea(){
  //   btnEliminarMaestroAjax
  // }
</script>