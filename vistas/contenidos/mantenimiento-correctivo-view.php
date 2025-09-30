<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Correctivos
    </h3>
    <!-- <p class="text-justify">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum rerum animi natus beatae ex. Culpa blanditiis tempore amet alias placeat, obcaecati quaerat ullam, sunt est, odio aut veniam ratione.
	</p> -->
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <div class="pull-right">

                <button type="button" class="btn btn-primary" data-toggle="modal" id="btnModalManttoCorrectivo" data-target="#modalMantenimientoCorrectivo"><i class="fa fa-plus"></i> Agregar</button>
            </div>
        </li>
        <li>
            <a href="<?php echo serverUrl; ?>user-search/"><i class="fas fa-search fa-fw"></i> &nbsp; BUSCAR </a>
        </li>
    </ul>
</div>

<div id="tabla-correctivo" class="container-fluid"></div>

<div class="modal fade" id="modalMantenimientoCorrectivo" data-backdrop="static" data-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <form id="formMantenimientoCorrectivo" action="<?php echo serverUrl; ?>ajax/mantenimientoAjax.php" autocomplete="off" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fa fa-book"></i> Registrar Correctivo</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row g-3">
                        <div class="col-md-6 col-12 mb-3">
                            <label for="correctivo_fechaCorrectivo" class="form-label">Fecha Mantenimiento</label>
                            <input type="date" class="form-control" id="correctivo_fechaCorrectivo" name="correctivo_fechaCorrectivo" required>
                            <input type="hidden" name="id_correctivo" id="id_correctivo" value="ESTOY AQUI">
                            <input type="hidden" name="accion" value="registrar_correctivo">
                            <input type="hidden" name="mantenimiento" value="correctivo">
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="correctivo_sentido" class="form-label">Sentido</label>
                            <select id="correctivo_sentido" name="correctivo_sentido" class="form-control" required>
                                <option value=""> Cargando... </option>
                            </select>
                        </div>
                        <!-- <div class="col-md-6 col-12 mb-3">
                            <label for="correctivo_tipoFicha" class="form-label">Tipo de Ficha</label>
                            <select id="correctivo_tipoFicha" name="correctivo_tipoFicha" class="form-control" required>
                                <option value=""> Cargando... </option>
                            </select>
                        </div> -->
                        <div class="col-md-6 col-12 mb-3">
                            <label for="correctivo_sistema" class="form-label">Sistema</label>
                            <select id="correctivo_sistema" name="correctivo_sistema" class="form-control" required>
                                <option value=""> -- Seleccione el Sentido -- </option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="correctivo_tipoEquipo" class="form-label">Tipo de Equipo</label>
                            <select id="correctivo_tipoEquipo" name="correctivo_tipoEquipo" class="form-control" required>
                                <option value=""> -- Seleccione el Sistema -- </option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="correctivo_equipo" class="form-label">Equipo</label>
                            <select id="correctivo_equipo" name="correctivo_equipo" class="form-control" required>
                                <option value=""> -- Seleccione el Tipo de Equipo </option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="correctivo_personal" class="form-label">Tecnico Responsable</label>
                            <select id="correctivo_personal" name="correctivo_personal" class="form-control" required>
                                <option value=""> Cargando... </option>
                            </select>
                        </div>
                        <!-- <div class="col-md-6 col-12 mb-3">
                            <label for="correctivo_problema" class="form-label">Problema</label>
                            <input type="text" class="form-control" id="correctivo_problema" name="correctivo_problema" required>
                        </div> -->
                        <!-- <div class="col-md-6 col-12 mb-3">
                            <label for="correctivo_detalleProblema" class="form-label">Detalles del Problema</label>
                            <textarea name="correctivo_detalleProblema" id="correctivo_detalleProblema" class="form-control"></textarea>
                        </div> -->
                        <div class="col-md-6 col-12 mb-3">
                            <label for="correctivo_condicion" class="form-label">Condición</label>
                            <select id="correctivo_condicion" name="correctivo_condicion" class="form-control" required>
                                <option value=""> Cargando... </option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mb-3">
                            <label for="correctivo_turno" class="form-label">Turno</label>
                            <select id="correctivo_turno" name="correctivo_turno" class="form-control" required>
                                <option value=""> Cargando... </option>
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="correctivo_observacion" class="form-label">Observaciones</label>
                            <textarea name="correctivo_observacion" id="correctivo_observacion" class="form-control" style="height: 80px"></textarea>
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
        // const modal = new bootstrap.Modal('#modalMantenimientoCorrectivo');
        const form = document.getElementById('formMantenimientoCorrectivo');
        fnListarMantenimientoCorrectivo('listar_correctivo', 'correctivo');
        // cargarSelectArea();
        cargarSelectSentido();
        cargarSelectSistema();

        // document.getElementById('correctivo_sentido').addEventListener('change', (e) => {
        //     const codSentido = e.target.value;
        //     if (codSentido !== '') {
        //         cargarSelectSistema();
        //         // cargarSelectSistema(codSentido);
        //         // cargarSelectTipoEquipoxSistema(codSentido);
        //     } else {
        //         // alert('Entro bacio')
        //         limpiarSelect('correctivo_sistema');
        //         limpiarSelect('correctivo_tipoEquipo');
        //         limpiarSelect('correctivo_equipo');
        //     }
        // });

        document.getElementById('correctivo_sistema').addEventListener('change', (e) => {
            const codSistema = e.target.value;
            if (codSistema !== '') {
                cargarSelectTipoEquipoxSistema(codSistema);
                // cargarSelectSistema(codSistema);
                // cargarSelectTipoEquipoxSistema(codSistema);
            } else {
                // alert('Entro bacio')
                // limpiarSelect('correctivo_sistema');
                limpiarSelect('correctivo_equipo');
                // limpiarSelect('correctivo_tipoEquipo');
            }
        });

        document.getElementById('correctivo_tipoEquipo').addEventListener('change', (e) => {
            const codTipoEquipo = e.target.value;
            if (codTipoEquipo !== '') {
                cargarSelectEquipoxTipoEquipo(codTipoEquipo);
                // cargarSelectSistema(codTipoEquipo);
                // cargarSelectTipoEquipoxSistema(codTipoEquipo);
            } else {
                // alert('Entro bacio')
                // limpiarSelect('correctivo_sistema');
                // limpiarSelect('correctivo_tipoEquipo');
                limpiarSelect('correctivo_equipo');
            }
        });

        // cargarSelectSistema();
        // cargarSelectTipoEquipoxSistema();
        // cargarSelectEquipoxTipoEquipo();
        cargarSelectPersonal();
        cargarSelectTurno();
        cargarSelectEstadoEquipo();

        //LIMPIA: cuando hace click para abrir el registrar
        document.getElementById('btnModalManttoCorrectivo')
            .addEventListener('click', () => {
                form.reset();
                form.id_correctivo.value = ''; // sin id → alta
                // modal.show();
            });
        //EDITAR: Obtenemos todos los datos del correctivo
        document.addEventListener('click', async e => {
            if (!e.target.closest('.btnEditarMantto')) return;

            const {
                id
            } = e.target.closest('.btnEditarMantto').dataset;

            const res = await fetch(urlFromBase('ajax/mantenimientoAjax.php'), {
                method: 'POST',
                body: new URLSearchParams({
                    accion: 'obtener_correctivo',
                    mantenimiento: 'correctivo',
                    id: id
                })
            });
            const data = await res.json();
            console.log(data)
            // return
            if (!data) return Swal.fire('Error', 'No se encontró el registro', 'error');

            cargarSelectTipoEquipoxSistema(data.codsistema);
            cargarSelectEquipoxTipoEquipo(data.codtequipo, data.codequipo);
            // cargarselecte

            /* Relleno campos del modal */
            setTimeout(() => {
                form.id_correctivo.value = data.codigo;
                form.correctivo_fechaCorrectivo.value = (data.fecha).split(' ')[0];
                form.correctivo_sentido.value = data.codsentido;
                form.correctivo_sistema.value = data.codsistema;
                form.correctivo_tipoEquipo.value = data.codtequipo;
                form.correctivo_equipo.value = data.codequipo;
                form.correctivo_personal.value = data.codpersonal;
                form.correctivo_condicion.value = data.codestadoe;
                form.correctivo_turno.value = data.codturno;
                form.correctivo_observacion.value = data.observaciones;
            }, 4000);
            // … los demás selects / inputs …

            $('#modalMantenimientoCorrectivo').modal('show');
        });
        //REGISTRAR: Cuando se hace un submit este lo envia al AJAX para registrar
        document.getElementById('formMantenimientoCorrectivo')
            .addEventListener('submit', async function(e) {
                e.preventDefault();
                const form = e.target;
                const data = new FormData(form);
                let method = this.getAttribute("method");
                let action = this.getAttribute("action");
                let tipo = this.getAttribute("data-form");
                // console.log(data.get('id_correctivo'))
                // return
                let encabezados = new Headers();

                let config = {
                    method: method,
                    headers: encabezados,
                    mode: "cors",
                    cache: "no-cache",
                    body: data,
                };
                // console.log("EQUIPO: ", data.get("correctivo_equipo"))
                let textoAlerta = tipoAlerta(tipo);

                Swal.fire({
                        title: "Estas seguro",
                        text: textoAlerta,
                        type: "question",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonText: "#d33",
                        confirmButtonText: "Aceptar",
                        cancelButtonText: "Cancelar",
                    }).then((result) => {
                        if (result.value) {
                            console.log(action)
                            fetch(action, config)
                                .then((response) => response.json())
                                .then((data) => {
                                    // console.log(data)
                                    // alert("entro")
                                    // const res = await response.text();
                                    alertasAjax(data);
                                    // Resetear y cerrar modal
                                    form.reset();
                                    $('#modalMantenimientoCorrectivo').modal('hide');

                                    // Recargar tabla
                                    fnListarMantenimientoCorrectivo('listar_correctivo', 'correctivo');
                                });
                        }
                    })
                    .catch(error => console.error(error));
            });

    });

    function limpiarSelect(idSelect) {
        // alert(idSelect)
        let nameSelect = "";
        switch (idSelect) {
            case 'correctivo_sistema':
                nameSelect = "el Sentido";
                break;
            case 'correctivo_tipoEquipo':
                nameSelect = "el Sistema";
                break;
            case 'correctivo_equipo':
                nameSelect = "el Tipo de Equipo";
                break;
            default:
                nameSelect = "";
                break;
        }
        const select = document.getElementById(idSelect);
        // alert(nameSelect)
        select.innerHTML = '<option value=""> -- Seleccione ' + nameSelect + ' -- </option>';
    }

    function fnListarMantenimientoCorrectivo(accion, maestro) {
        fetch(urlFromBase('ajax/mantenimientoAjax.php'), {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'accion=' + accion + '&mantenimiento=' + maestro
            })
            .then(res => res.text())
            .then(html => {
                document.getElementById('tabla-' + maestro).innerHTML = html;
                fnBtnEliminarManttoAjax();
            });
    }

    function fnBtnEliminarManttoAjax() {

        document.querySelectorAll('.btnEliminarMantto').forEach(btn => {
            btn.addEventListener('click', async (e) => {
                // const id = btn.dataset.id;
                const {
                    id,
                    mantenimiento,
                    accion
                } = btn.dataset
                let textoAlerta = tipoAlerta('delete');
                console.log(btn.dataset)
                const confirm = await Swal.fire({
                    title: "Estas seguro",
                    text: textoAlerta,
                    type: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonText: "#d33",
                    confirmButtonText: "Aceptar",
                    cancelButtonText: "Cancelar",
                });

                if (confirm.value) {

                    // const formData = new URLSearchParams();
                    // formData.append('maestro', 'tipoVehiculo');
                    // formData.append('accion', 'eliminar_tipoVehiculo');
                    // formData.append('maestro_tipoVehiculo_eliminar_id', id);
                    const formData = new URLSearchParams({
                        id,
                        mantenimiento,
                        accion
                    });
                    // console.log("ENTOR A ALERTAS.JS", formData);
                    const res = await fetch(urlFromBase('ajax/mantenimientoAjax.php'), {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: formData.toString()
                    })

                    const mensaje = await res.json();
                    const accionListar = 'listar_' + mantenimiento

                    alertasAjax(mensaje);
                    // Swal.fire('Hecho', mensaje, 'success');
                    fnListarMantenimientoCorrectivo(accionListar, mantenimiento);
                }
            })
        });

    }

    function cargarSelectSentido() {
        fetch(urlFromBase('ajax/selectAjax.php?accion=sentido'))
            .then(res => res.json())
            .then(data => {
                const select = document.getElementById('correctivo_sentido');
                select.innerHTML = '<option value="">-- Seleccione un Sentido -- </option>'
                data.forEach(data => {
                    const option = document.createElement('option');
                    option.value = data.codigo;
                    option.textContent = data.nombre
                    select.appendChild(option)
                });
            });
    }

    function cargarSelectTurno() {
        fetch(urlFromBase('ajax/selectAjax.php?accion=turno'))
            .then(res => res.json())
            .then(data => {
                const select = document.getElementById('correctivo_turno');
                select.innerHTML = '<option value="">-- Seleccione un Turno -- </option>'
                data.forEach(data => {
                    const option = document.createElement('option');
                    option.value = data.codigo;
                    option.textContent = data.nombre
                    select.appendChild(option)
                });
            });
    }

    function cargarSelectSistema() {
        fetch(urlFromBase('ajax/selectAjax.php?accion=sistema'))
            .then(res => res.json())
            .then(data => {
                const select = document.getElementById('correctivo_sistema');
                select.innerHTML = '<option value="">-- Seleccione un Sistema -- </option>'
                data.forEach(data => {
                    const option = document.createElement('option');
                    option.value = data.codigo;
                    option.textContent = data.nombre
                    select.appendChild(option)
                });
            });
    }

    function cargarSelectTipoEquipoxSistema(idSistema) {
        fetch(urlFromBase(`ajax/selectAjax.php?accion=tipoEquipoxSistema&idSistema=${idSistema}`))
            .then(res => res.json())
            .then(data => {
                const select = document.getElementById('correctivo_tipoEquipo');
                select.innerHTML = '<option value="">-- Seleccione un Tipo de Equipo -- </option>'
                data.forEach(data => {
                    const option = document.createElement('option');
                    option.value = data.codigo;
                    option.textContent = data.nombre
                    select.appendChild(option)
                });
            });
    }

    // function cargarSelectEquipoxTipoEquipo(idTipoEquipo) {
    //     const idSentido = document.getElementById('correctivo_sentido').value;
    //     fetch(urlFromBase(`ajax/selectAjax.php?accion=equipoxTipoEquipo&idTipoEquipo=${idTipoEquipo}`))
    //         .then(res => res.json())
    //         .then(data => {
    //             const select = document.getElementById('correctivo_equipo');
    //             select.innerHTML = '<option value="">-- Seleccione un Equipo -- </option>'
    //             data.forEach(data => {
    //                 const option = document.createElement('option');
    //                 option.value = data.codigo;
    //                 option.textContent = data.nombre
    //                 select.appendChild(option)
    //             });
    //         });
    // }

    function cargarSelectEquipoxTipoEquipo(idTipoEquipo, selectedId = null) {
        const idSentido = document.getElementById('correctivo_sentido').value;

        fetch(urlFromBase(`ajax/selectAjax.php?accion=equipoxTipoEquipo&idTipoEquipo=${idTipoEquipo}`))
            .then(res => res.json())
            .then(data => {
                const select = document.getElementById('correctivo_equipo');
                select.innerHTML = '<option value="">-- Seleccione un Equipo --</option>';

                data.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.codigo;
                    option.textContent = item.nombre;

                    // 👇 si coincide con el que quiero mostrar, lo marco como seleccionado
                    if (selectedId && item.codigo == selectedId) {
                        option.selected = true;
                    }

                    select.appendChild(option);
                });
            });
    }


    function cargarSelectPersonal() {
        fetch(urlFromBase('ajax/selectAjax.php?accion=personal'))
            .then(res => res.json())
            .then(data => {
                const select = document.getElementById('correctivo_personal');
                select.innerHTML = '<option value="">-- Seleccione un Personal -- </option>'
                data.forEach(data => {
                    const option = document.createElement('option');
                    option.value = data.codigo;
                    option.textContent = data.nombre
                    select.appendChild(option)
                });
            });
    }

    function cargarSelectEstadoEquipo() {
        fetch(urlFromBase('ajax/selectAjax.php?accion=estadoEquipo'))
            .then(res => res.json())
            .then(data => {
                const select = document.getElementById('correctivo_condicion');
                select.innerHTML = '<option value="">-- Seleccione el estado del equipo -- </option>'
                data.forEach(data => {
                    const option = document.createElement('option');
                    option.value = data.codigo;
                    option.textContent = data.nombre
                    select.appendChild(option)
                });
            });
    }
</script>