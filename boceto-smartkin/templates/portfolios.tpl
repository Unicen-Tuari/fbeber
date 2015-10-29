<div class="page-header"></div>
<div class="portfolios">
  <h1>Portfolios</h1>
  <p>NOTA: hacer galeria</p>
</div>
      
<ul class="list-group">
  {foreach $portfolios as $portfolio}
    <li class="list-group-item">
      {$portfolio['name_port']}
      {$portfolio['descrip_port']}
      {foreach $portfolio['imagenes'] as $imagen}
        <img src="{$imagen['path_port']}" class="img-thumbnail" width="100px" id="{$imagen['id_img_port']}" />
      {/foreach}
    </li>
  {/foreach}
</ul>
        