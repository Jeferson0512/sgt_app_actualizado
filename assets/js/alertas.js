const formMaestroAjax = document.querySelectorAll(".formMaestro");
const btnEditarMaestroAjax = document.querySelectorAll(".btnEditarMaestro");

async function fnEnviarFormMaestroAjax(e) {
  e.preventDefault();

  let form = new FormData(this);
  let method = this.getAttribute("method");
  let action = this.getAttribute("action");
  let tipo = this.getAttribute("data-form");
  const maestro = form.get("maestro");
  const accionListar = "listar_" + maestro; //-> Editamos el parametro ACCION para cambiarlo de acuerdo a la subcategoria que estamos

  let encabezados = new Headers();

  let config = {
    method: method,
    headers: encabezados,
    mode: "cors",
    cache: "no-cache",
    body: form,
  };

  const confirm = await confirmAlerta(tipo);

  if (confirm.value) {
    // alert("ENTRO AL FORM")
    fetch(action, config)
      .then((response) => response.json())
      .then((resultado) => {
        alertasAjax(resultado); //-> Indicamos que nos envie un mensaje de alerta de acuerdo a lo que nos indique el controlador

        e.target.reset(); //-> reseteamos el FORMULARIO
        // this.reset(); //-> reseteamos el FORMULARIO

        $("#modalMaestro_" + maestro).modal("hide"); //-> Hacemos el modal dinamico identificando la subCategori

        fnTableListaMaestro(accionListar, maestro); //-> Actualizamos la tabla
      });
  }
}

/*=============================================================================*/
/*==================== Lista las Tablas maestras dinamicas ====================*/
/*=============================================================================*/

// Lista con parametros accion = "MAESTRO" | MAESTRO = "AREA"
// La accion hace entender que esta en la Categoria
// El maestro hace indicar que subcategoria pertenece
function fnTableListaMaestro(accion, maestro) {
  fetch(urlFromBase('ajax/maestroAjax.php'), {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body: "accion=" + accion + "&maestro=" + maestro,
  })
    .then((res) => res.text())
    .then((html) => {
      document.getElementById("tabla-" + maestro).innerHTML = html; //-> Agrega el HTML que envia el Controlador
      fnBtnEliminarMaestroAjax(); //-> Habilita el boton, si nono funciona
    });
}

// Elimina las subcategorias de los maestros
async function fnBtnEliminarMaestroAjax() {
  document.querySelectorAll(".btnEliminarMaestro").forEach((btn) => {
    btn.addEventListener("click", async (e) => {
      // const id = btn.dataset.id; //-> Obtiene el data-id que tiene el boton

      const { id, maestro, accion } = btn.dataset; //-> obtiene los 3 data-attrs(data-atributos)

      /** PRIMERA MANERA DE PREGUNTAR */
      // let textoAlerta = tipoAlerta("delete"); //-> Obtiene el tipo de alerta que debe de enviar
      // const confirm = await Swal.fire({
      //   title: "Estas seguro",
      //   text: textoAlerta,
      //   type: "question",
      //   showCancelButton: true,
      //   confirmButtonColor: "#3085d6",
      //   cancelButtonText: "#d33",
      //   confirmButtonText: "Aceptar",
      //   cancelButtonText: "Cancelar",
      // }); //-> Cuando se muestre, nos arrojara un true o false

      /** SEGUNDA MANERA DE PREGUNTAR */
      const confirm = await confirmAlerta("delete");

      if (confirm.value) {
        // const formData = new URLSearchParams();
        // formData.append('maestro', 'tipoVehiculo');
        // formData.append('accion', 'eliminar_tipoVehiculo');
        // formData.append('maestro_tipoVehiculo_eliminar_id', id);
        const formData = new URLSearchParams({ id, maestro, accion }); //-> Agregamos los dataset para enviarlo al AJAX
        // console.log("ENTOR A ALERTAS.JS", formData);
        const res = await fetch(urlFromBase("ajax/maestroAjax.php"), {
          method: "POST",
          headers: {
            "Content-Type": "application/x-www-form-urlencoded",
          },
          body: formData.toString(),
        });

        const mensaje = await res.json(); //-> Recibimos la respuesta y lo convertimos en JSON

        const accionListar = "listar_" + maestro; //-> Editamos el parametro ACCION para cambiarlo de acuerdo a la subcategoria que estamos

        alertasAjax(mensaje); //-> Indicamos que nos envie un mensaje de alerta de acuerdo a lo que nos indique el controlador
        // Swal.fire('Hecho', mensaje, 'success');
        fnTableListaMaestro(accionListar, maestro); //-> Actualizamos la tabla
      }
    });
  });
}
// function fnAgregarBotonEliminarMaestro()
// {
//   // const btnEliminarMaestroAjax = document.querySelectorAll(".btnEliminarMaestro");
//   //Obtiene  el boton de la tabla con "btnEliminarMaestro" de Maestros
//   document.querySelectorAll(".btnEliminarMaestro").forEach((btn) => {
//     btn.addEventListener("click", fnBtnEliminarMaestroAjax);
//   });
// }
//Obtiene el formulario del Modal con "formMaestroAjax" de Maestros
formMaestroAjax.forEach((form) => {
  form.addEventListener("submit", fnEnviarFormMaestroAjax); //-> Si realiza un evento SUBMIT, que realice la funcion indicada
});

//VERIFICA segun el tipo enviado, que texto se mostrará en el titulo
function tipoAlerta(tipo) {
  let textoAlerta = "";
  if (tipo === "save") {
    textoAlerta = "Los datos quedaran guardados en el sistema";
  } else if (tipo === "delete") {
    textoAlerta = "Los datos seran eliminados completamente del sistema";
  } else if (tipo === "update") {
    textoAlerta = "Los datos del sistema seran actualizados";
  } else if (tipo === "search") {
    textoAlerta =
      "Se eliminara el termino de busqueda y tendras que escribir uno nuevo";
  } else if (tipo === "loans") {
    textoAlerta =
      "Desea remover los datos seleccionados para prestamos o reservaciones";
  } else {
    textoAlerta = "Quieres realizar la operación solicitada";
  }
  return textoAlerta;
}
//CONFIRMA si confirmo el usuario o no y devuelve una promesa por eso el uso de async
async function confirmAlerta(tipo) {
  let textoAlerta = tipoAlerta(tipo);
  let confirm = await Swal.fire({
    title: "¿Estas seguro de realizar esta accion?",
    text: textoAlerta,
    type: "question",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Aceptar",
    cancelButtonText: "Cancelar",
  });
  return confirm;
}

//NOTIFICACION: De acuerdo a que
function alertasAjax(alerta) {
  if (alerta.Alerta === "simple") {
    Swal.fire({
      title: alerta.Titulo,
      text: alerta.Texto,
      type: alerta.Tipo,
      // confirmButtonText: "Aceptar",
      showConfirmButton: false,
      position: "top-center",
      timer: 1500,
    });
  } else if (alerta.Alerta === "recargar") {
    Swal.fire({
      title: alerta.Titulo,
      text: alerta.Texto,
      type: alerta.Tipo,
      // confirmButtonText: "Aceptar",
      showConfirmButton: false,
      position: "top-center",
      timer: 1500,
    }).then((result) => {
      if (result.value) {
        location.reload();
      }
    });
  } else if (alerta.Alerta === "limpiar") {
    Swal.fire({
      title: alerta.Titulo,
      text: alerta.Texto,
      type: alerta.Tipo,
      // confirmButtonText: "Aceptar",
      showConfirmButton: false,
      position: "top-center",
      timer: 1500,
    }).then((result) => {
      if (result.value) {
        // document.querySelectorAll(".FormularioAjax").reset(); //-> Deberia de limpiar los formularios
      }
    });
  } else if (alerta.Alerta === "redireccionar") {
    window.location.href = alerta.URL;
  }
}
