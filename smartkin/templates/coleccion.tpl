{foreach $Colecciones as $dato} 
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/{$dato.img_col}.jpg" alt="{$dato.img_col}">
      <div class="caption">
        <h4>{$dato.name_col}</h4>
        <p><button type="button" class="btn btn-default btn-sm">
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ver todos los modelos
    </button>
      </div>
    </div>
  </div>
{/foreach}
	