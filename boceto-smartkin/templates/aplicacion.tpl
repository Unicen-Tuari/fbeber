<h1>Aplicación</h1>
<br>
  <div class="bordes col-md-5">
      <h3>Ayuda!</h3>
      <p>1) Sube tu imagen <br>
      <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/><br>
          2) Elegir dispositivo <br>
            {foreach $colecciones as $coleccion}
          
          <li class="list-group-item">
          Elegir Dispositivo:<br>
            {foreach $coleccion['imagenes'] as $imagen}
                <img src="./images/modelos/{$imagen['path_mod']}" class="img-thumbnail" width="50px" id="{$imagen['id_mod']}" />
            {/foreach}
          </li>
        {/foreach}
          3) Probar! <br>
          <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_comentario&id_com={$comentario['id_com']}">Probar</a> <br>
          4) <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_comentario&id_com={$comentario['id_com']}">Descargar</a> | 
          <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_comentario&id_com={$comentario['id_com']}">Descartar</a>
      </p>
  </div>
  <div class="bordes col-md-6">
    <img src="./images/modelos/{$imagen['path_mod']}" class="img-thumbnail" width="350px" id="{$imagen['id_mod']}" /><br>
        
  </div>
  