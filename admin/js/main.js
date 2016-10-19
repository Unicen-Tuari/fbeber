//INICIALIZACION SECCIONES
const home = "home";
const actividades_admin = "actividades";
const profesores_admin = "nosotros";

// CARGA EL CONTENIDO DE CADA SECCION, SEGUN EL BOTON
$("#inicio_admin").on("click",function() {loadRender("index.php?action=inicio_admin")});
$("#actividades_admin").on("click",function() {loadRender("index.php?action=actividades_admin")});
$("#profesores_admin").on("click",function() {loadRender("index.php?action=profesores_admin")});

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

//previsualizar imagen al subir----
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

//carga informacion por una actividad especifica + el profesor
function cargaInfoAct(id_actividad){
  $.ajax({
    method: "POST",
    url: "index.php?action=profeact&id_actividad="+id_actividad,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#borraActividad').html(data);
    }
  });
}

//consulta por una actividad especifica
function infoActividad(id_actividad){
  $.ajax({
    method: "POST",
    url: "index.php?action=actividad&id_actividad="+id_actividad,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#modificaActividad').html(data);
    }
  });
}

function infoProfesor(id_profesor){
  $.ajax({
    method: "POST",
    url: "index.php?action=profesor&id_profesor="+id_profesor,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#borraProfesor').html(data);
    }
  });
}

