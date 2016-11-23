//INICIALIZACION SECCIONES
const home = "home";
const actividades = "actividades";
const nosotros = "nosotros";
const contacto = "contacto";


// CARGA EL CONTENIDO DE CADA SECCION, SEGUN EL BOTON
$("#inicio_admin").on("click",function() {loadRender("index.php?action=inicio_admin")});
$("#actividades_admin").on("click",function() {loadRender("index.php?action=actividades_admin")});
$("#profesores_admin").on("click",function() {loadRender("index.php?action=profesores_admin")});
//consulta profesores por actividad
$("#actividad").on("click",function() {loadRender("index.php?action=actividad")});
$("#profeact").on("click",function() {loadRender("index.php?action=profeact")});
//ABM-actividades
//$("#agregar_actividad").on("click",function() {loadRender("index.php?action=agregar_actividad")});
//$("#modificar_actividad").on("click",function() {loadRender("index.php?action=modificar_actividad")});
//ABM-profesores
//$("#agregar_profesor").on("click",function() {loadRender("index.php?action=agregar_profesor")});
//$("#borrar_profesor").on("click",function() {loadRender("index.php?action=borrar_profesor")});
//$("#modificar_profesor").on("click",function() {loadRender("index.php?action=modificar_profesor")});

//muestra la imagen previa en el momento en que se sube
function mostrarImagen(input) {
 if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function (e) {
   $('#img_destino').attr('src', e.target.result);
  }
  reader.readAsDataURL(input.files[0]);
 }
}

$("#imagesToUpload").change(function(){
 mostrarImagen(this);
});


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



//carga informacion por una actividad especifica
function cargaInfoAct(id_actividad){
  $.ajax({
    method: "POST",
    url: "index.php?action=profeact&id_actividad="+id_actividad,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#tableActividad').html(data);
    }
  });
}

function infoActividad(id_actividad){
  $.ajax({
    method: "POST",
    url: "index.php?action=actividad&id_actividad="+id_actividad,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#tableAct').html(data);
    }
  });
}

function borrarAct(id_act){
  $.ajax({
    method: "POST",
    url: "index.php?action=borrar_actividad&id_act="+id_act,
    contentType:'html',
    cache: false,
  });
    window.location.reload(true);
  }

function modificarAct(id_act){
  $.ajax({
    method: "POST",
    url: "index.php?action=modificar_actividad&id_act="+id_act,
    contentType:'html',
    cache: false,
  });
  window.location.reload(true);
}

function agregarAct(){
  $.ajax({
    method: "POST",
    url: "index.php?action=agregar_actividad",
    contentType:'html',
    cache: false,
  });
  window.location.reload(true);
}
