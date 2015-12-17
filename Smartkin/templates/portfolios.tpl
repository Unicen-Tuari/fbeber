<article>
	<section>
			{foreach $portfolios as $imagen}								          
                   	
			<div class="col-md-2 portfolio">
        		<img src="./admin/{$imagen['img_port']}" alt="{$imagen['id_img_port']}" width="90%" >
        		<h6>{$imagen.descripcion}</h6>
             </div>
                	
			{/foreach}
		
	</section>
</article>
