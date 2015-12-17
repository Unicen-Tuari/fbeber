<article>
		
			
				<section>
					<div class="page-header cabecera-seccion">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0"></li>
        {foreach $slides as $imagen}
          
            <li data-target="#carouse  l-example-generic" data-slide-to="0"></li>
          
        {/foreach}
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    <div class="item active">
      <img  width="100%" src="./imagenes/images-sys/1.jpg" alt="..." class="img-thumbnail" />
      <div class="carousel-caption">
      </div>
    </div>
  
    
  {foreach $slides as $imagen}
          
    <div class="item">
      <img width="100%" src="./admin/{$imagen['img_slide']}" class="img-thumbnail" id="{$imagen['id_slide']}"/>
      <div class="carousel-caption">
      </div>
    </div>    
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
</div></div>
					
					
				</section>
			

</article>
