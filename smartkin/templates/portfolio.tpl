
{foreach $portfolios as $dato} 
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/{$dato.img_port}" alt="{$dato.img_port}">
      <div class="caption">
        <h4>{$dato.name_port}</h4>
        <p>{$dato.descrip_port}</p>
        <p><button type="button" class="btn btn-default btn-sm">
      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    </button>
      </div>
    </div>
  </div>
{/foreach}
	