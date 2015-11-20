<div class="page-header"></div>
<div class="portfolios">
  <h1>Portfolios</h1>
  
</div>
      
<ul class="list-group">
  {foreach $portfolios as $portfolio}
      {foreach $portfolio['imagenes'] as $imagen}
        <img src="./images/{$imagen['path_port']}" class="lista" width="100px" id="{$imagen['id_img_port']}" />
      {/foreach}
  {/foreach}
</ul>
        