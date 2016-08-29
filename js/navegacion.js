// JavaScript Document
"use strict";

//INICIALIZACION DE CONSTANTES-SECCIONES
const home = "home";
const actividades = "actividades";
const consejos = "consejos";
const nosotros = "nosotros";
const contacto = "contacto";

//CARGA EL CONTENIDO DEL HOME
$(document).ready(function(){
  loadRender("./secciones/home-cont.html");
})

// CARGA EL CONTENIDO DE CADA SECCION, SEGUN EL BOTON
$("#home").on("click",function() {loadRender("./secciones/home-cont.html",home)});
$("#actividades").on("click",function() {loadRender("./secciones/actividades.html",actividades)});
$("#consejos").on("click", function() {loadRender("./secciones/consejos.html",consejos)});
$("#nosotros").on("click",function() {loadRender("./secciones/nosotros.html",nosotros)});
$("#contacto").on("click",function() {loadRender("./secciones/contacto.html",contacto)});


//AGREGA LAS FUNCIONES A LAS SECCIONES QUE LAS CONTIENEN
function loadRender(link,seccion) {
  $.ajax({
      type:"GET",
      url: link,
      dataType: "html",
      success: function(data) {
        $("#contenido").html(data);
        switch(seccion) { 
          case actividades: {
            funcionInformacionActividades();
            break;
          }
        }
      },
      error:function(jqxml, status, errorThrown){
        $("#contenido").text("No se pudo cargar la página");
        console.log(errorThrown);
      }
    });
}

//SE PIDE LA INFORMACION
function funcionInformacionActividades() {
  $("#infoFitness").on("click", function() {cargaInfoActividades("./secciones/infoActividades/fitness.html");
  });
  $("#infoTaebox").on("click", function() {cargaInfoActividades("./secciones/infoActividades/taebox.html");
  });
  $("#infoZumba").on("click", function() {cargaInfoActividades("./secciones/infoActividades/zumba.html");
  });
  $("#infoRutina").on("click", function() {cargaInfoActividades("./secciones/infoActividades/rutina.html");
  });
}

//CARGA EN EL DIV LA INFORMACION QUE SE LE PIDE
function cargaInfoActividades(link) {
  $.ajax({
      type:"GET",
      url: link,
      dataType: "html",
      success: function(data) {
        
          if(link == "./secciones/infoActividades/fitness.html"){
            $("#infoActFitness").html(data);
          }
          else if (link == "./secciones/infoActividades/taebox.html"){
            $("#infoActTaebox").html(data);
          }
          else if (link == "./secciones/infoActividades/zumba.html"){
            $("#infoActZumba").html(data);
          }
          else if (link == "./secciones/infoActividades/rutina.html"){
            $("#infoActRutina").html(data);
          }      },
      error:function(jqxml, status, errorThrown){
        $("#infoActividad").text("No se pudo cargar la página");
        console.log(errorThrown);
      }
    });
}

