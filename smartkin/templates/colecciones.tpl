<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/smartkin.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="body-sm">

 {foreach $colecciones as $coleccion}
          <div class="col-md-6">

  {if $coleccion['publico']}
  <h4>{$coleccion['name_col']}</h4>
      
        {foreach $coleccion['imagenes'] as $imagen}


          <div class="col-md-2">
            <div class="mod" style="background:url('./images/{$imagen.img_mod}'); background-size:cover">

              {foreach $usuario as $user}

                {if !$user['bloqueado']}
                  <form action="colecciones.php?action=agregar_favorito" method="POST" enctype="multipart/form-data" class="text-right">   
                    <input id="{$user.id_user}" name= "new_fk_user" value="{$user.id_user}" placeholder="{$user.name_user}"hidden/>
                    <input id="{$imagen.id_mod}" name= "new_fk_mod" value="{$imagen.id_mod}" placeholder="{$imagen.id_mod}"hidden/>
                    
                    <button type="submit" name="saveForm" class="btn btn-success"><span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></button>   
                  </form>
                {/if}
              {/foreach}
                  {foreach $favoritos as $fav}
                    {if $fav.id_mod==$imagen.id_mod}
                      <h1>{$fav.cantidad} </h1>
                    {/if}
                  {/foreach}
                    
              </div>  
          </div>
            {/foreach}
          {/if}
        
        </div>

{/foreach}
</body></html>