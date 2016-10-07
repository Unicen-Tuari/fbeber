// JavaScript Document
"use strict";

//INICIALIZACION DE CONSTANTES-SECCIONES
const inicio = "inicio";
const usuarios = "usuarios";
const actividades = "actividades";
const profesores = "profesores";

//CARGA EL CONTENIDO DEL HOME
$(document).ready(function(){
  loadRenderAdmin("./secciones/admin/admin-cont.html");
})

// CARGA EL CONTENIDO DE CADA SECCION, SEGUN EL BOTON
$("#inicio").on("click",function() {loadRenderAdmin(". /secciones/admin/admin-cont.html",inicio)});
$("#horarios").on("click",function() {loadRenderAdmin("./secciones/admin/horarios.html",horarios)});
$("#actividades").on("click",function() {loadRenderAdmin("./secciones/admin/actividades.html",actividades)});
$("#usuarios").on("click",function() {loadRenderAdmin("./secciones/admin/usuarios.html",usuarios)});
$("#profesores").on("click", function() {loadRenderAdmin("./secciones/admin/profesores.html",profesores)});

//AGREGA LAS FUNCIONES A LAS SECCIONES SI ES QUE TIENE
/*function loadRenderAdmin(link,seccion) {
  $.ajax({
      type:"GET",
      url: link,
      dataType: "html",
      success: function(data) {
        $("#adminRender").html(data);
          switch(seccion) { 
        }
      },
      error:function(jqxml, status, errorThrown){
        $("#adminRender").text("No se pudo cargar la página");
        console.log(errorThrown);
      }
    });
}
*/

