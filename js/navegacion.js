//INICIALIZACION SECCIONES
const home = "home";
const include = "includes";
const actividades = "actividades";
const nosotros = "nosotros";
const contacto = "contacto";
const usuario  = "usuario";
const cuenta = "cuenta";
const opiniones = "opiniones";

// CARGA EL CONTENIDO DE CADA SECCION, SEGUN EL BOTON
$("#home").on("click",function() {loadRender("index.php?action=inicio")});
$("#actividades").on("click",function() {loadRender("index.php?action=actividades")});
$("#nosotros").on("click",function() {loadRender("index.php?action=nosotros")});
$("#contacto").on("click",function() {loadRender("index.php?action=contacto")});
$("#usuario").on("click",function() {loadRender("index.php?action=usuario")});
$("#cuenta").on("click",function() {loadRender("index.php?action=cuenta")});
$("#opiniones").on("click",function() {loadRender("index.php?action=opiniones")});


//AGREGA LAS FUNCIONES A LAS SECCIONES QUE LAS CONTIENEN
function loadRender(etiqueta,callback) {
 $.ajax({
  method: "GET",
  url:etiqueta,
  error: function () {
    alert("La página no cargó");
  },
  dataType: "HTML",
  success: function (receivedData) {
      $("#contenido").html(receivedData);
      if(callback != undefined){
      callback();
    }

    },
});
}

function actualiza(){
$("#actualiza_com").on("load",function() {loadRender("index.php?action=opiniones")});
$alert("actualizando...");
}

//setInterval( "actualiza()", 2000 );

