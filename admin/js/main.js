// CARGA EL CONTENIDO DE CADA SECCION, SEGUN EL BOTON
$("#inicio_admin").on("click",function() {loadRender("index.php?action=inicio_admin");});
$("#actividades_admin").on("click",function() {loadRender("index.php?action=actividades_admin")});
$("#profesores_admin").on("click",function() {loadRender("index.php?action=profesores_admin")});
$("#usuarios_admin").on("click",function() {loadRender("index.php?action=usuarios_admin")});
$("#comentarios_admin").on("click",function() {loadRender("index.php?action=comentarios_admin")});



//AGREGA LAS FUNCIONES A LAS SECCIONES QUE LAS CONTIENEN
function loadRender(etiqueta) {//OK
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









