<div class="col-md-12" id="comentarios">
<div class="page-header"></div>  
    <h1>Comentarios</h1>
    <br>
                    
        <!--NUEVO COMENTARIO-->
    <div class="col-md-12">
        {if isset($usuario)}
            {foreach $usuario as $user}
                {if !$user['bloqueado']}
                   <form action="index.php?action=agregar_comentario" method="POST" enctype="multipart/form-data"> 
                                <div class="col-md-8"> 
  
                    <input id="{$user.id_user}" name= "new_fk_user" value="{$user.id_user}" placeholder="{$user.name_user}"hidden/>
                     <div class="form-group has-success">
                    <input id="new_com" name="new_com"  class="form-control" type="text" maxlength="500" value=""/ placeholder="Comentario...">
                </div>
                <div class="col-md-4 text-center">
                    <input class="btn btn-default btn-md te" type="submit" name="saveForm" value="Comentar" /></div>    
                </div>
                                    </form>   

                {/if}
            {/foreach}
        {else}

            <p>Para comentar, por favor <a href="index.php" >ingrese</a> a su cuenta.
            Si aún no se encuentra registrado, ingrese  <a href="#registrarse" rel="registrarse" data-content='' data-placement="">aquí</a></p>
        {/if}
    </div>
    
        
        <!--LISTA DE COMENTARIOS-->
       {foreach $comentarios as $comentario}
            
                <div class="col-md-12 text-left coment">    
                    
                    <img src="./images/{$comentario.img_user}" class="icon-coment" width="60px">
                    |{$comentario.fecha_com}|
                    {$comentario.comentario}
                </div>
            
            {/foreach}

        </div>
  
