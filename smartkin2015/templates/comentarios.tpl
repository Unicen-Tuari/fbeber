<div class="page-header" id="comentarios"></div>

    <h1>Comentarios</h1>
    <br>


        <!--NUEVO COMENTARIO-->
        {if isset($usuario)}
            {foreach $usuario as $user}
                {if !$user['bloqueado']} 
                   <form action="index.php?action=agregar_comentario" method="POST" enctype="multipart/form-data">   
                    <input id="{$user.id_user}" name= "new_fk_user" value="{$user.id_user}" placeholder="{$user.name_user}"hidden/>
                     <div class="form-group has-success">
                    <input id="new_com" name="new_com"  class="form-control" type="text" maxlength="500" value=""/ placeholder="Comentario...">
                    <input class="btn btn-default btn-md te" type="submit" name="saveForm" value="Comentar" /></div>    
                    </form>   
                {/if}
            {/foreach}
        {else}
            <p>Para comentar, por favor <a href="index.php" >ingrese</a> a su cuenta.
            Si aún no se encuentra registrado, ingrese  <a href="#registrarse" rel="registrarse" data-content='' data-placement="">aquí</a></p>
        {/if}

    
        
        <!--LISTA DE COMENTARIOS-->
       
        {foreach $comentarios as $comentario}
            <div class="text-left">
                <img src="./images/images_sys/anonimo.jpg" class="icon_user" width="70px"> {$comentario.name_user} comentó: {$comentario.comentario}
                <p class="text-left">{$comentario.fecha_com}</p>
            </div>
        {/foreach}
  
