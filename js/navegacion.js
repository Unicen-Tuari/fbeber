// JavaScript Document
"use strict";

//INICIALIZACION DE CONSTANTES-SECCIONES
const home = "home";
const include = "includes";
const actividades = "actividades";
const nosotros = "nosotros";
const contacto = "contacto";

// CARGA EL CONTENIDO DE CADA SECCION, SEGUN EL BOTON
$("#home").on("click",function() {
  loadRender("index.php?action=inicio")});
$("#actividades").on("click",function() {loadRender("index.php?action=actividades")});
$("#nosotros").on("click",function() {loadRender("index.php?action=nosotros")});
$("#contacto").on("click",function() {loadRender("index.php?action=contacto")});


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

//SE PIDE LA INFORMACION
/*function funcionInformacionActividades() {
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
*/

