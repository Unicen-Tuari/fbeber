//FUNCIONES DE USUARIOS

//COMENTARIOS
function cargaComentariosUsuario(id_usuario){
  $.ajax({
    method: "POST",
    url: "index.php?action=comentariosusuario&id_usuario="+id_usuario,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#comUsuario').html(data);
    }
  });
}
//BAJA COMENTARIOS
function infoComentario(id_comentario){
  $.ajax({
    method: "POST",
    url: "index.php?action=infocomentario&id_comentario="+id_comentario,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#infoComentario').html(data);
    }
  });
}

function borraComentario(id_comentario){//OK
  $.ajax({
    method: "POST",
    url: "index.php?action=borrar_comentario&id_comentario="+id_comentario,
    contentType:'html',
    cache: false,
    success: function(data){
       loadRender("index.php?action=comentarios_admin");
    }
  });
}
/***************************************************/


//consulta sobre un usuario especifico para ser eliminado
function borraUsuario(id_usuario){//OK
  $.ajax({
    method: "POST",
    url: "index.php?action=borrar_usuario&id_usuario="+id_usuario,
    contentType:'html',
    cache: false,
    success: function(data){
       loadRender("index.php?action=usuarios_admin");
    }
  });
}

//BAJA USUARIO
function infoUsuario(id_usuario){//OK
  $.ajax({
    method: "POST",
    url: "index.php?action=usuario&id_usuario="+id_usuario,
    contentType:'html',
    cache: false,
    success: function(data){
      $('#infoUsuario').html(data);
    }
  });
}
//consulta sobre un usuario especifico para ser eliminado
function borraUsuario(id_usuario){//OK
  $.ajax({
    method: "POST",
    url: "index.php?action=borrar_usuario&id_usuario="+id_usuario,
    contentType:'html',
    cache: false,
    success: function(data){
       loadRender("index.php?action=usuarios_admin");
    }
  });
}