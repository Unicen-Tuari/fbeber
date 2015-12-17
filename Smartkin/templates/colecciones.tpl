<article>
	<section>
		{if isset($colecciones)}
			{foreach $colecciones as $modelo}
				<section>
					<div class="page-header cabecera-seccion">
						<h4>{$modelo.name_col} {$modelo.id_col}</h4>
					</div>
					
					{foreach $modelo['imagenes'] as $img}

<!--galerias-->         <img src="./admin/{$img['img_mod']}" alt="{$img['img_mod']}" width="100px;" class="portfolio" >
					{/foreach}             			
                
            </section>
			{/foreach}
			{else}
			no anda
		{/if}
	</section>
</article>
