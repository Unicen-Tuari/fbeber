// JavaScript Document
"use strict";

//INICIALIZACION DE CONSTANTES-SECCIONES
const home = "home";
const include = "includes";
const actividades_admin = "actividades_admin";
const profesores_admin = "profesores_admin";


// CARGA EL CONTENIDO DE CADA SECCION, SEGUN EL BOTON
$("#home").on("click",function() {loadRender("index.php?action=inicio")});
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
          }
        );
  }
