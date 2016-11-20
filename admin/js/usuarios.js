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