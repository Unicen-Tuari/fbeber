{include file="header.tpl"}

      <div class="col-md-12 fondoplaca"> <!--galeria-->

      <div class="col-md-2"></div>
      <div class="col-md-8 placa">
        {foreach $colecciones as $coleccion}
          {if $coleccion['publico']}
            <h4>{$coleccion['name_col']}</h4>
            {foreach $coleccion['imagenes'] as $imagen}
              <div class="text-center port" >
              <img src="./images/{$imagen['img_mod']}" class="img-port" width="100%">
              {foreach $favoritos as $fav}
                {if $fav.id_mod==$imagen.id_mod}
               
              
              {foreach $usuario as $user}

                {if !$user['bloqueado']}
                  <form action="colecciones.php?action=agregar_favorito" method="POST" enctype="multipart/form-data" class="text-right">   
                    <input id="{$user.id_user}" name= "new_fk_user" value="{$user.id_user}" placeholder="{$user.name_user}"hidden/>
                    <input id="{$imagen.id_mod}" name= "new_fk_mod" value="{$imagen.id_mod}" placeholder="{$imagen.id_mod}"hidden/>
                    
                    <button type="submit" name="saveForm" class="btn btn-success"><span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span>{$fav.cantidad}</button>   
                  </form>
                {/if}
              {/foreach}
            
                   {/if}
              {/foreach}  
        </div>
        {/foreach}
      {/if}
    {/foreach}
      </div>
    
        <div class="container-fluid">
<div class="row-fluid">
<div class="span12">

    <div class="control-box">                            
            <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
            Colecciones
            <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
        </div><!-- /.control-box -->  
        <br>
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            
            <div class="item"><!--colecciones-->
                    <ul class="thumbnails">
                        <li class="span3"><!--imagenes-->
                            <div class="thumbnail">
                                <a href="#"><img src="mzHjb_data/360x240.png" alt=""></a>
                            </div>
                            <div class="caption">
                        <p>Código: xxx</p>
                                <a class="btn btn-mini" href="#">Like</a>
                            </div>
                        </li>
                    </ul>
              </div>
              <div class="item"><!--colecciones-->
                    <ul class="thumbnails">
                        <li class="span3"><!--imagenes-->
                            <div class="thumbnail">
                                <a href="#"><img src="mzHjb_data/360x240.png" alt=""></a>
                            </div>
                            <div class="caption">
                                <h4>Praesent commodo</h4>
                                <p>Nullam Condimentum Nibh Etiam Sem</p>
                                <a class="btn btn-mini" href="#">» Read More</a>
                            </div>
                        </li>
                    </ul>
              </div>
        </div>
        
         
                              
    </div><!-- /#myCarousel -->
        
</div><!-- /.span12 -->          
</div><!-- /.row --> 
</div><!-- /.container -->

{include file="placa.tpl"}
{include file="footer.tpl"}
