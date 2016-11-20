function agregaUsuario(){
  $.ajax({
    method: "POST",
    url: "index.php?action=agregar_usuario&new_apyno_u=" + $("#new_apyno_u").val() + "&new_email_u=" + $("#new_email_u").val() + "&new_pass_u=" + $("#new_pass_u").val(),
    data: $("#agregar_user").serialize(), // DATOS DEL FORM
    success: function(data){
       loadRender("index.php?action=usuario");
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