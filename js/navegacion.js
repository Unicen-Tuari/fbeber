//INICIALIZACION SECCIONES
const home = "home";
const include = "includes";
const actividades = "actividades";
const nosotros = "nosotros";
const contacto = "contacto";

// CARGA EL CONTENIDO DE CADA SECCION, SEGUN EL BOTON
$("#home").on("click",function() {loadRender("index.php?action=inicio")});
$("#actividades").on("click",function() {loadRender("index.php?action=actividades")});
$("#nosotros").on("click",function() {loadRender("index.php?action=nosotros")});
$("#contacto").on("click",function() {loadRender("index.php?action=contacto")});


//AGREGA LAS FUNCIONES A LAS SECCIONES QUE LAS CONTIENEN
function loadRender(etiqueta) {
 $.ajax({
  method: "GET",
  url:etiqueta,
  error: function () {
    alert("La página no cargó");
  },
  dataType: "HTML",
  success: function (receivedData) {
    $("#contenido").html(receivedData);
    },
});
}

//carga la todos los profesores por una actividad específica
function cargaProfesores(id_actividad){
  $.ajax({
    method: "POST",
    url: "index.php?action=profeact&id_actividad="+id_actividad,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#tableProfesores').html(data);
    }
  });
}
