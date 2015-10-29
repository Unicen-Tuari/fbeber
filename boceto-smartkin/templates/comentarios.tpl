<div class="page-header" id="comentarios"></div>

    <h1>Comentarios</h1>
    <br>

        <!--NUEVO COMENTARIO-->        <form id="formComments" class="appnitro"  method="post" action="">

        <input class="form-control" placeholder="Agregar Comentario" id="new_comentario" name= "new_comentario" class="element text" value=""/>
        <p>Para comentar, por favor <a href="#" data-toggle="modal" data-target="#loguearse">ingrese</a> a su cuenta.
        Si aún no se encuentra registrado, ingrese  <a href="#nada" rel="registrarse" data-content='' data-placement="">aquí</a></p> 
    
            <input id="saveForm" class="button_text" type="submit" name="saveForm" value="Comentar" />   
         
    </form>
<!--LISTA DE COMENTARIOS-->

    {foreach $comentarios as $comentario}
  <div class="text-left">
        <img src="./images/images_sys/anonimo.jpg" class="icon_user" width="70px"> {$comentario['comentario']}
        <p class="text-left">{$comentario['fk_id_user']}</p>
        <p class="text-left">{$comentario['date_com']}</p>
        <br>    
  </div>
    {/foreach}
  
