{include file="header.tpl"}

{if isset($slides)}
<!-- Button trigger modal -->

<div class="bordes col-md-12">
<h2>Listado de Slides</h2>
<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Nombre</th>
				<th class="text-center">Modelos</th>
			</tr>
		</thead>
    				{foreach $slides as $slide}	

    	<tbody>
    		
			<tr>
					<td>
						{$slide.name_slide}
					</td>

				<td class="text-left">
				<form action="admin_slides.php?action=agregar_img_slide&id_slide={$slide['id_slide']}" method="POST" enctype="multipart/form-data">
        
          <div class="bordes col-md-12">
        
                <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
        
        
              <button type="submit" class="btn btn-default">Listo!</button>       
        
        
          </div>
                  
          </form>
				{foreach $slide['imagenes'] as $imagen}
                  
                  <img src="{$imagen['img_slide']}" alt="{$imagen['id_img_slide']}-{$slide['id_slide']}" class="img-thumbnail" width="100px" id="{$imagen['id_img_slide']}" />
                  <a class="glyphicon glyphicon-trash" href="admin_slides.php?action=borrar_img_slide&id_img_slide={$imagen['id_img_slide']}"></a>

                {/foreach}
				</td>
		</tr>
	</tbody>{/foreach}

</table>
                 
</div>               

                  
{/if}
{include file="footer.tpl"}                  


	