function agregaUsuario(){
  $.ajax({
    method: "POST",
    url: "index.php?action=agregar_usuario&new_apyno_u=" + $("#new_apyno_u").val() + "&new_email_u=" + $("#new_email_u").val() + "&new_pass_u=" + $("#new_pass_u").val(),
    data: $("#agregar_user").serialize(), // DATOS DEL FORM
    success: function(data){
        alert("Gracias por haberse registrado a nuestro Gimnasio");
    }
  });
}

function agregaComentario(){
  $.ajax({
    method: "POST",
    url: "index.php?action=agregar_comentario&new_comentario=" + $("#new_comentario").val() + "&new_puntaje=" + $("#new_puntaje").val() + "&new_idAct_c=" + $("#new_idAct_c").val() + "&new_idUser_c=" + $("#new_idUser_c").val(),
    data: $("#agregar_com").serialize(), // DATOS DEL FORM
    success: function(data){
       loadRender("index.php?action=actividades");
    }
  });
}

//inscribir
function agregaInscripcion(){
  $.ajax({
    method: "POST",
    url: "index.php?action=inscribir&new_idProfe_i=" + $("#new_idProfe_i").val() + "&new_idUser_i=" + $("#new_idUser_i").val(),
    data: $("#inscripcion").serialize(), // DATOS DEL FORM
    success: function(data){
       loadRender("index.php?action=actividades");
    }
  });
}
//carga todos los profesores de una actividad específica
function cargaComentarios(id_act_c){
  $.ajax({
    method: "POST",
    url: "index.php?action=comentarios&id_act_c="+id_act_c,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#tableComentarios').html(data);
    }
  });
}

//carga todos los profesores de una actividad específica
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

//*********************************************************************
function actualiza(){
    $("#tableComentarios").load(function() {loadRender("index.php?action=opiniones")});
  }
setInterval( "actualiza()", 2000 );
