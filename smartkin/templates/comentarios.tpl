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
<div class="col-md-12">
    {if isset($usuario)}
    {foreach $usuario as $user}
    {if !$user['bloqueado']}
                   
    <form action="comentarios.php?action=agregar_comentario" method="POST" enctype="multipart/form-data"> 
        <div class="col-md-6"> 
            <input id="{$user.id_user}" name= "new_fk_user" value="{$user.id_user}" placeholder="{$user.name_user}" hidden/>
            <div class="form-group has-success">
            <input id="new_com" name="new_com"  class="form-control" type="text" maxlength="500" value=""/ placeholder="Comente aqui...">
        </div>
        <div class="col-md-4">
            <input class="btn btn-default btn-md te" type="submit" name="saveForm" value="Comentar" />
        </div>            
    </form>
    {/if}
    {/foreach}
    <div class="col-md-12 text-center">   
    {else}

        <p class="text-center">Para comentar, por favor <a href="index.php" >ingrese</a> a su cuenta.
            Si aún no se encuentra registrado, ingrese  <a href="#registrarse" rel="registrarse" data-content='' data-placement="">aquí</a></p>
    {/if}
    </div>
        <!--LISTA DE COMENTARIOS-->
       {foreach $comentarios as $comentario}
            
                <div class="col-md-12 text-left coment">    
                    
                    <img src="{$comentario.img_user}" class="icon-coment" width="60px">
                    |{$comentario.fecha_com}|
                    {$comentario.name_user}
                    {$comentario.comentario}
                </div>
            
            {/foreach}

        </div>
    </div>
</body>
</html>  
