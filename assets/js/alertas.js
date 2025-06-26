const formulariosAjax = document.querySelectorAll(".FormularioAjax");
// function fnEnviarFormularioAjax(e) {
//   e.preventDefault();

//   let data = new FormData(this);
//   let method = this.getAttribute("method");
//   let action = this.getAttribute("action");
//   let tipo = this.getAttribute("data-form");

//   let encabezados = new Headers();

//   let config = {
//     method: method,
//     headers: encabezados,
//     mode: "cors",
//     cache: "no-cache",
//     body: data,
//   };

//   let textoAlerta;

//   if (tipo === "save") {
//     textoAlerta = "Los datos quedaran guardados en el sistema";
//   } else if (tipo === "delete") {
//     textoAlerta = "Los datos seran eliminados completamente del sistema";
//   } else if (tipo === "update") {
//     textoAlerta = "Los datos del sistema seran actualizados";
//   } else if (tipo === "search") {
//     textoAlerta =
//       "Se eliminara el termino de busqueda y tendras que escribir uno nuevo";
//   } else if (tipo === "loans") {
//     textoAlerta =
//       "Desea remover los datos seleccionados para prestamos o reservaciones";
//   } else {
//     textoAlerta = "Quieres realizar la operación solicitada";
//   }

//   Swal.fire({
//     title: "Estas seguro",
//     text: textoAlerta,
//     type: "question",
//     showCancelButton: true,
//     confirmButtonColor: "#3085d6",
//     cancelButtonText: "#d33",
//     confirmButtonText: "Aceptar",
//     cancelButtonText: "Cancelar",
//   }).then((result) => {
//     if (result.value) {
//       console.log(action)
//       fetch(action, config)
//         .then((response) => response.json())
//         .then((data) => {
//           alertasAjax(data);

//           // fetch('maestro-area-view.php?controller=maestros&action=fnListarMaestroAreas')
//           //           .then(res => res.text())
//           //           .then(html => {
//           //               document.getElementById('content-table').innerHTML = html;
//           //               // form.reset(); // Limpiar formulario
//           //           });
//           // // $("#"+data.modal).modal("hide")
//         });
//     }
//   });
// }

formulariosAjax.forEach((formularios) => {
  formularios.addEventListener("submit", fnEnviarFormularioAjax);
});
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
function confirmAlerta(tipo) {
  let textoAlerta = tipoAlerta(tipo);
  let confirm = Swal.fire({
    title: "Estas seguro",
    text: textoAlerta,
    type: "question",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonText: "#d33",
    confirmButtonText: "Aceptar",
    cancelButtonText: "Cancelar",
  });
  return confirm;
}

function alertasAjax(alerta) {
  if (alerta.Alerta === "simple") {
    Swal.fire({
      title: alerta.Titulo,
      text: alerta.Texto,
      type: alerta.Tipo,
      confirmButtonText: "Aceptar",
    });
  } else if (alerta.Alerta === "recargar") {
    Swal.fire({
      title: alerta.Titulo,
      text: alerta.Texto,
      type: alerta.Tipo,
      confirmButtonText: "Aceptar",
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
      confirmButtonText: "Aceptar",
    }).then((result) => {
      if (result.value) {
        // document.querySelectorAll(".FormularioAjax").reset();
      }
    });
  } else if (alerta.Alerta === "redireccionar") {
    window.location.href = alerta.URL;
  }
}
