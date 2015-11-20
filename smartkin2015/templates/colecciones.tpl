<div class="page-header"></div>  
  <div id="col-md-12 bordes">
      <h1>Colecciones</h1>
      <p>NOTA: hacer galeria</p>


<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  {foreach $colecciones as $coleccion}
  {if !$coleccion['publico']}
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="head-{$coleccion['name_col']}">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#{$coleccion['name_col']}" aria-expanded="false" aria-controls="{$coleccion['name_col']}">
          {$coleccion['name_col']}
        </a>
      </h4>
    </div>
    <div id="{$coleccion['name_col']}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="head-{$coleccion['name_col']}">
      <div class="panel-body">
        {foreach $coleccion['imagenes'] as $imagen}
              <img src="./images/{$imagen['img_mod']}" id="{$imagen['id_mod']}" width="90px"class="lista"/>          
              {foreach $favoritos as $fav}
                {if $fav.id_mod==$imagen.id_mod}
                  {$fav.cantidad}
                {/if}
              {/foreach}

              {foreach $usuario as $user}
                {if !$user['bloqueado']}
                
                        <form action="index.php?action=agregar_favorito" method="POST" enctype="multipart/form-data">   
                          <input id="{$user.id_user}" name= "new_fk_user" value="{$user.id_user}" placeholder="{$user.name_user}"hidden/>
                          <input id="{$imagen.id_mod}" name= "new_fk_mod" value="{$imagen.id_mod}" placeholder="{$imagen.id_mod}"hidden/>
                          <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true">
                          <input type="submit" name="saveForm" value="Favorito" /></span>
                        </form>
                {/if}
              {/foreach}
            {/foreach}
          {/if}
        
      </div>
    </div>{/foreach}</div>

</div>

      

  