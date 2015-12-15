{include file="header.tpl"}    
<div class="col-md-12 fondoplaca"> <!--galeria-->

        <div class="col-md-2"></div>
        <div class="col-md-8 placa">
 

            <div class="control-box">                            
                <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
                <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
            </div><!-- /.control-box -->  
        
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            {foreach $colecciones as $coleccion}
            {if $coleccion['publico']}
            <div class="item">
                <ul class="thumbnails">
                    <h4>{$coleccion['name_col']}</h4><!--colecciones-->
                    {foreach $coleccion['imagenes'] as $imagen}
                                            <li class="span3"><!--imagenes-->
                            <div class="thumbnail">
                                <img src="./images/{$imagen['img_mod']}" alt="">
                				{foreach $favoritos as $fav}
                                    {if $fav.id_mod==$imagen.id_mod}
                                    <p>Código: {$fav.id_mod}</p>
                                    <p>{$fav.cantidad}</p>
                                    {/if}
                                {/foreach}
                                
                                {foreach $usuario as $user}
                                    <div class="caption">
                                        {if !$user['bloqueado']}
                                        <form action="colecciones.php?action=agregar_favorito" method="POST" enctype="multipart/form-data" class="text-right">   
                                        <input id="{$user.id_user}" name= "new_fk_user" value="{$user.id_user}" placeholder="{$user.name_user}"hidden/>
                                        <input id="{$imagen.id_mod}" name= "new_fk_mod" value="{$imagen.id_mod}" placeholder="{$imagen.id_mod}"hidden/>                                    
                                        <button type="submit" name="saveForm" class="btn btn-mini"><span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></button> 
                                        </form>
                                        {/if}
                                    </div>                            
                              {/foreach}                      
                            </li>
                        {/foreach}
                    {/if}
                {/foreach}
            </ul>             
        </div>                         
    </div><!-- /#myCarousel -->
        

</div></div></div>
                            
<!-- Delete This -->                        
<div class="footer">

      

    <script src="mzHjb_data/jquery.js"></script>
<script src="mzHjb_data/bootstrap.js"></script>

        <script>
      $(document).ready(function () {
    $('.carousel').carousel({ interval: 6000 });
});
      //@ sourceURL=pen.js
    </script>

    
    <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

    
  

 
</body></html>