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
//hasta aca todo bien

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

//BAJA ACTIVIDAD FUNCIONANDO :)
//carga informacion por una actividad especifica + el/los profesores
function infoProfeAct(id_actividad){
  $.ajax({
    method: "POST",
    url: "index.php?action=profeact&id_actividad="+id_actividad,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#infoProfeAct').html(data);
    }
  });
}
function borraAct(id_act){
  $.ajax({
    method: "POST",
    url: "index.php?action=borrar_actividad&id_act="+id_act,
    contentType:'html',
    cache: false,
    success: function(data){
       loadRender("index.php?action=actividades_admin");
    }
  });
}
function modAct(){
  $.ajax({
    method: "POST",
    url: "index.php?action=modificar_actividad&id_act=" + $("#id_act").val() + "&upd_nombre_a=" + $("#upd_nombre_a").val() + "&upd_descripcion_a=" + $("#upd_descripcion_a").val(),
    contentType:'html',
    cache: false,
    data: $("#modifica_actividad").serialize(), // DATOS DEL FORM
    success: function(data){
       loadRender("index.php?action=actividades_admin");
    }
  });
}
//fin de andando
//faltan las imagenes pero en general andando
function agregaAct(){
  $.ajax({
    method: "POST",
    url: "index.php?action=agregar_actividad&new_nombre_a=" + $("#new_nombre_a").val() + "&new_descripcion_a=" + $("#new_descripcion_a").val() + "&imagesToUpload[]=" + $("#imagesToUpload").val(),
    data: $("#agregar_actividad").serialize(), // DATOS DEL FORM
    success: function(data){
       loadRender("index.php?action=actividades_admin");
    }
  });
}

function profeActividades(id_profe){
  $.ajax({
    method: "POST",
    url: "index.php?action=profeactividades&id_profe="+id_profe,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#infoProfeActividades').html(data);
    }
  });
}

function agregaProfe(){
  $.ajax({
    method: "POST",
    url: "index.php?action=agregar_profesor&new_name_p=" + $("#new_name_p").val()  + "&new_apellido_p=" + $("#new_apellido_p").val() + "&new_dni_p=" + $("#new_dni_p").val() + "&new_horarios_p=" + $("#new_horarios_p").val() + "&new_id_act_p=" + $("#new_id_act_p").val() + "&new_descripcion_p=" + $("#new_descripcion_p").val(),
    data: $("#agregar_profesor").serialize(), // DATOS DEL FORM
    success: function(data){
       loadRender("index.php?action=profesores_admin");
    }
  });
}

//modo de prueba
function modProfe(){
  $.ajax({
    method: "POST",
    url: "index.php?action=modificar_profesor&id_profe=" + $("#id_profe").val()  + "&upd_nombre_p=" + $("#upd_nombre_p").val() + "&upd_apellido_p=" + $("#upd_apellido_p").val() + "&upd_dni_p=" + $("#upd_dni_p").val() + "&upd_horarios_p=" + $("#upd_horarios_p").val() + "&upd_id_act_p=" + $("#upd_id_act_p").val() + "&upd_descripcion_p=" + $("#upd_descripcion_p").val(),
    contentType:'html',
    cache: false,
    data: $("#modifica_profesor").serialize(), // Adjuntar los campos del formulario enviado.
    success: function(data){
       loadRender("index.php?action=profesores_admin");
    }
  });
}


//consulta por una actividad especifica, se muestra en la tabla del profesor
function infoActividad(id_actividad){
  $.ajax({
    method: "POST",
    url: "index.php?action=actividad&id_actividad="+id_actividad,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#infoActividad').html(data);
    }
  });
}



//BAJA PROFESOR FUNCIONANDO
function infoProfesor(id_profesor){
  $.ajax({
    method: "POST",
    url: "index.php?action=profesor&id_profesor="+id_profesor,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#infoProfesor').html(data);
    }
  });
}
function borraProfe(id_profe){
  $.ajax({
    method: "POST",
    url: "index.php?action=borrar_profesor&id_profe="+id_profe,
    contentType:'html',
    cache: false,
    success: function(data){
       loadRender("index.php?action=profesores_admin");
    }
    });
}
//fin de funcionando

/*function modifProfesor(id_profe){
  $.ajax({
    method: "POST",
    url: "index.php?action=modificar_profesor&id_prof="+id_prof,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#modifProfesor').html(data);
    }
  });
}*/



