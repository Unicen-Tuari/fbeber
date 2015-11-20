
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0"></li>
    {foreach $slides as $slide}
    <li data-target="#carousel-example-generic" data-slide-to="0"></li>
    {/foreach}
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    {foreach $slides as $slide}
    {if $slide['principal']}
    <div class="item active">
      <img width="100%" src="./images/{$slide['path_slide']}" alt="..." class="img-thumbnail "/>
      <div class="carousel-caption">
          {$slide['path_slide']}
      </div>
    </div>
    {else}
    

    <div class="item">
      <img width="100%" src="./images/{$slide['path_slide']}" class="img-thumbnail" id="{$slide['id_mod']}"/>
      <div class="carousel-caption">
        {$slide['path_slide']}
      </div>
    </div>    
    {/if}
  {/foreach}


  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>