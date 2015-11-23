<div class="page-header"></div>  
      <h1>Colecciones</h1>
      <p>NOTA: hacer galeria</p>


  {foreach $colecciones as $coleccion}
  


  <div class="col-md-6 text-center">
  {if $coleccion['publico']}
  <h4>{$coleccion['name_col']}</h4>
      
        {foreach $coleccion['imagenes'] as $imagen}
          <div class="col-md-3">

            
            <div class="mod" style="background:url('./images/{$imagen.img_mod}')">
              
              {foreach $usuario as $user}
                {if !$user['bloqueado']}
                  <form action="index.php?action=agregar_favorito" method="POST" enctype="multipart/form-data" class="text-right">   
                    <input id="{$user.id_user}" name= "new_fk_user" value="{$user.id_user}" placeholder="{$user.name_user}"hidden/>
                    <input id="{$imagen.id_mod}" name= "new_fk_mod" value="{$imagen.id_mod}" placeholder="{$imagen.id_mod}"hidden/>
                    {foreach $favoritos as $fav}
                      {if $fav.id_mod==$imagen.id_mod}
                        <button type="submit" name="saveForm" class="btn btn-success">{$fav.cantidad} <span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></button>
                      {/if}
                    {/foreach}
                  </form>
                {/if}
              {/foreach}

             
              </div>  
          </div>
            {/foreach}
          {/if}
        
  </div>

{/foreach}
