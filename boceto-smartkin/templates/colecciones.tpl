<div class="page-header"></div>  
  <div id="col-md-12 bordes">
      <h1>Colecciones</h1>
      <p>NOTA: hacer galeria</p>
      {foreach $colecciones as $coleccion}
        
        <li class="list-group-item">
            {$coleccion['name_col']}
            <br>
                     
          {foreach $coleccion['imagenes'] as $imagen}
              <img src="./images/modelos/{$imagen['path_mod']}" class="img-thumbnail" width="100px" id="{$imagen['id_mod']}" />
          {/foreach}
        </li>
      {/foreach}
  </div>

  