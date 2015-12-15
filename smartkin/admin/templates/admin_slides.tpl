{include file="header.tpl"}

{if isset($slides)}
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Agregar Slides</button>
<div class="bordes col-md-12">
<h2>Listado de Slides</h2>
<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Nombre</th>
				<th class="text-center">Publicar / No Publicar</th>
				<th class="text-center">Borrar</th>
				<th class="text-center">Modelos</th>
			</tr>
		</thead>
    				{foreach $slides as $slide}	

    	<tbody>
    		
			<tr>
				{if !$slide['publico']}
					<td><s>{$slide.name_slide}</s>
						<form action="admin_slides.php?action=modificar_name_col&id_col={$slide['id_slide']}" method="POST" enctype="multipart/form-data">
		            <input type="text" class="form-control" id="upd_name_slide" name="upd_name_slide" value="{$slide.name_slide}"> 
	            
			        <button type="submit" class="btn btn-success glyphicon glyphicon-ok">Guardar</button>    
	    			</form>
					</td>
					<td><a class="glyphicon glyphicon-ok" href="admin_slides.php?action=no_publicar_slide&id_col={$slide['id_slide']}"><button type="submit" class="btn btn-default">Publicar</button></a></td>
					

				{else}
                    {$slide['name_slide']}
                    <td>{$slide.name_slide}
                    <form action="admin_slides.php?action=modificar_name_slide&id_slide={$slide['id_slide']}" method="POST" enctype="multipart/form-data">
		            <input type="text" class="form-control" id="upd_name_slide" name="upd_name_slide" value="{$slide.name_slide}"> 
	            
			        <button type="submit" class="btn btn-success glyphicon glyphicon-ok">Guardar</button>    
	    			</form>
	    			</td>
					<td><a class="glyphicon glyphicon-ok" href="admin_slides.php?action=publicar_slide&id_slide={$slide['id_slide']}"><button type="submit" class="btn btn-default">No Publicar</button></a></td>

				{/if}

					<td><a class="glyphicon glyphicon-trash" href="admin_slides.php?action=borrar_slides&id_slide={$slide['id_slide']}"></a></td>

				
					
				<td class="text-left">
				<form action="admin_slides.php?action=agregar_img_slide&id_slide={$slide['id_slide']}" method="POST" enctype="multipart/form-data">
        
          <div class="bordes col-md-3">
        
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


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevos slides</h4>
      </div>
      <div class="modal-body">
        <form action="admin_slides.php?action=agregar_slides" method="POST" enctype="multipart/form-data">

    	<input type="text" class="form-control" id="slide" name="slide" placeholder="Nombre del nuevo slides">	

   		<input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
                  
{/if}
{include file="footer.tpl"}                  


	