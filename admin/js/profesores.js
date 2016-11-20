//FUNCIONES DE PROFESOR
function agregaProfe(){//NOver ver ver  ver ver
  $.ajax({
    method: "POST",
    url: "index.php?action=agregar_profesor&new_apyno_p=" + $("#new_apyno_p").val()  + "&new_email_p=" + $("#new_email_p").val() + "&new_dni_p=" + $("#new_dni_p").val() + "&new_horarios_p=" + $("#new_horarios_p").val() + "&new_id_act_p=" + $("#new_id_act_p").val() + "&new_descripcion_p=" + $("#new_descripcion_p").val() + "&new_pass_p=" + $("#new_pass_p").val(),
    data: $("#agregar_profesor").serialize(), // DATOS DEL FORM
    success: function(data){
       loadRender("index.php?action=profesores_admin");
    }
  });
}
//modifica profesor
function modProfe(){//OK
  $.ajax({
    method: "POST",
    url: "index.php?action=modificar_profesor&id_profe=" + $("#id_profe").val()  + "&upd_apyno_p=" + $("#upd_apyno_p").val() + "&upd_email_p=" + $("#upd_email_p").val() + "&upd_dni_p=" + $("#upd_dni_p").val() + "&upd_horarios_p=" + $("#upd_horarios_p").val() + "&upd_id_act_p=" + $("#upd_id_act_p").val() + "&upd_descripcion_p=" + $("#upd_descripcion_p").val() + "&upd_permisos_p=" + $("#upd_permisos_p").val(),
    contentType:'html',
    cache: false,
    data: $("#modifica_profesor").serialize(), // Adjuntar los campos del formulario enviado.
    success: function(data){
       loadRender("index.php?action=profesores_admin");
    }
  });
}
//BAJA PROFESOR 
//consulta sobre un profesor especifico para borrarlo
function infoProfesor(id_profesor){//OK
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
function borraProfe(id_profe){//OK
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
//consulta inscriptos por profesor
function cargaInscriptos(id_profesor){
  $.ajax({
    method: "POST",
    url: "index.php?action=usuariosprofesor&id_profesor="+id_profesor,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#inscriptos').html(data);
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
