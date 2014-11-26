<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo Ajax</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<script type="text/javascript" src = "./js/main.js"> </script>
  </head>

  <body>
    <div class="container">
      <div class="page-header">
      <h1><a>Agregar Coleccion</a></h1>
    <form id="formComments" class="appnitro"  method="post" action="">
      <ul >
        <li id="li_1" >
          <label class="description" for="element_1">Categoria</label>
          
            <span>
            <input id="id_categoria" name= "id_categoria" class="element text" maxlength="20" size="20" value=""/>
          </span>
        </li>
        <li id="li_1" >
          <label class="description" for="element_1">Nombre Coleccion</label>
          <span>
            <input id="nombre_categoria" name= "nombre_categoria" class="element text" maxlength="20" size="20" value=""/>
          </span>
        </li>

        <li class="buttons">
          <input id="saveForm" class="button_text" type="submit" name="saveForm" value="Agregar" />
        </li>
      </ul>
    </form>   
    </div>
  </body>
</html>
