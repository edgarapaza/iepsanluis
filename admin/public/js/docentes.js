
mostrarTabla();
$("#task-result").hide();
// Configuración de paginación
var registrosPorPagina = 10;
var paginaActual = 1;
var paginasMostradas = 5; // Número de páginas mostradas en la paginación
// TABLA
function mostrarTabla() {
  var inicio = (paginaActual - 1) * registrosPorPagina;
  var fin = inicio + registrosPorPagina;
  $.ajax({
    type: "GET",
    url: "http://localhost/iepsanluis/admin/docentes/read",
    success: function (response) {
      let data = JSON.parse(response);
      var datosPagina = data.slice(inicio, fin);
      let template = "";
      datosPagina.forEach((dato) => {
        template += `
                <tr id="${dato.id}">
                    <td>${dato.id}</td>
                    <td><img src="${dato.foto}" alt="" width="50"></td>
                    <td>${dato.nombre}</td>
                    <td>${dato.especialidad}</td>
                    <td>${dato.telefono}</td>
                    <td>${dato.email}</td>

                    <td><a href = "http://localhost/iepsanluis/admin/docentes/getById/${dato.id}" class="button editar-dato">Detalles</a></td>
                    <td><button class="button alert eliminar">retirar</button></td>
                </tr>
            `;
      });
      $("#mostrarDatos").html(template);
      // Crear controles de paginación
      crearControlesPaginacion(data);
    },
    error: function (error) {
      console.error("Error en la solicitud", error);
    },
  });
}
// ELIMINAR
$(document).on("click", ".eliminar", function () {
  if (confirm("Estas seguro de eliminar este personal?")) {
    let element = $(this).closest("tr");
    //let element = $(this)[0].parentElement.parentElement;
    let id = $(element).attr("id");
    $.post({
      url: "http://localhost/iepsanluis/admin/docentes/delete",
      data: { id: id },
      success: function (response) {
        console.log(response);
        mostrarTabla();
      },
      error: function (error) {
        console.log(error);
      },
    });
  }
});
//BUSCADOR
$("#buscar").keyup(function () {
  if ($("#buscar").val()) {
    let search = $("#buscar").val();
    //console.log(search);
    $.ajax({
      url: "http://localhost/iepsanluis/admin/docentes/search",
      type: "POST",
      data: { search },
      success: function (response) {
        let data = JSON.parse(response);
        let template = "";
        data.forEach((dato) => {
          template += `
              <tr id="${dato.id}">
                <td>${dato.id}</td>
                <td><img src="${dato.foto}" alt="" width="50"></td>
                <td>${dato.nombre}</td>
                <td>${dato.especialidad}</td>
                <td>${dato.telefono}</td>
                <td>${dato.email}</td>

                <td><a href = "http://localhost/iepsanluis/admin/docentes/detalles/${dato.id}" class="button editar-dato">Detalles</a></td>
                <td><button class="button alert eliminar">retirar</button></td>
              </tr>
          `;
        });
        $("#container").html(template);
        $("#task-result").show();
      },
      error: function (error) {
        console.log(error);
      },
    });
  } else {
    $("#task-result").hide();
  }
});
// EDITAR 
$("#editar").click(function () {
  // Activar el input
  $("input:disabled").prop("disabled", false);
  $("textarea:disabled").prop("disabled", false);
});
// GUARDAR 
$("#guardar").click(function () {
  update();
});
// ENVIAR DATOS PARA ACTUALIZAR
function update(){
  let id = $("#id").val(),
  foto = $("#archivoInput").val(),
  acercade = $("#acercade").val(),
  nombre = $("#nombre").val(),
  apellidos = $("#apellidos").val(),
  especialidad = $("#especialidad").val(),
  telefono = $("#telefono").val(),
  ciudad = $("#ciudad").val(),
  email = $("#email").val(),
  grado = $("#grado").val();
  if(foto == ""){
    foto = $("#fotoprevia").attr("src");
  }
  $.ajax({
    url: "http://localhost/iepsanluis/admin/docentes/update",
    type: "POST",
    data: {id,foto,acercade,nombre,especialidad,telefono,ciudad,email,grado},
    success: function (response) {
      console.log(response);
    },
    error: function (error) {
      console.log("Este es un error: ",error);
    },
  });
}










// Paginacion Tables
function crearControlesPaginacion(datos) {
  var totalPaginas = Math.ceil(datos.length / registrosPorPagina);

  $("#paginacion").empty();
  var inicio = Math.max(1, paginaActual - Math.floor(paginasMostradas / 2));
  var fin = Math.min(totalPaginas, inicio + paginasMostradas - 1);

  // Botón de página anterior
  if (paginaActual > 1) {
    $("#paginacion").append(
      '<button class="button pagina" data-pagina="' +
        (paginaActual - 1) +
        '">Anterior</button>'
    );
  }

  // Botones de páginas
  for (var i = inicio; i <= fin; i++) {
    $("#paginacion").append(
      '<button class="button pagina ' +
        (i === paginaActual ? "activo" : "") +
        '" data-pagina="' +
        i +
        '">' +
        i +
        "</button>"
    );
  }

  // Botón de página siguiente
  if (paginaActual < totalPaginas) {
    $("#paginacion").append(
      '<button class="button pagina" data-pagina="' +
        (paginaActual + 1) +
        '">Siguiente</button>'
    );
  }
}

// Mostrar datos iniciales y controles de paginación
// mostrarDatos();
mostrarTabla();
//crearControlesPaginacion();

// Cambiar de página al hacer clic en un botón de paginación
$(document).on("click", ".pagina", function () {
  paginaActual = parseInt($(this).data("pagina"));
  mostrarTabla();
  // mostrarDatos();
  //crearControlesPaginacion();
});
