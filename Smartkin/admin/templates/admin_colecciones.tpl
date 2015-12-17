{include file="header.tpl"}
{if isset($colecciones)}
<br>

<div class="bordes col-md-12">
<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalColeccion">
  Agregar Colección
</button>
<h2>Listado de colecciones</h2>
<table class="table table-bordered">
		<thead>
			<tr class="active">
				<th class="text-center">Nombre</th>
				<th class="text-center">Borrar</th>
				<th class="text-center">Modelos</th>
			</tr>
		</thead>
    	{foreach $colecciones as $coleccion}

    	<tbody>	
			<tr>
					<td>
						<form action="admin_colecciones.php?action=modificar_name_col&id_col={$coleccion['id_col']}" method="POST" enctype="multipart/form-data">
		            		<input type="text" class="form-control" id="upd_name_col" name="upd_name_col" value="{$coleccion.name_col}">
	            
			        		<button type="submit" class="btn btn-success glyphicon glyphicon-ok">Modificar</button>    
	    				</form>
					</td>

					
					

                    {$coleccion['name_col']}
                    


					<td><a class="glyphicon glyphicon-trash" href="admin_colecciones.php?action=borrar_coleccion&id_col={$coleccion['id_col']}"></a></td>

				
					
				<td class="text-center	">
				<form action="admin_colecciones.php?action=agregar_modelos&id_col={$coleccion['id_col']}" method="POST" enctype="multipart/form-data">
        
          <div class="bordes col-md-12">
        
                <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
        
        
              <button type="submit" class="btn btn-default">Listo!</button>       
        
        
          </div>
    	              
	          </form>
				{foreach $coleccion['imagenes'] as $imagen}
                  
                  <img src="{$imagen['img_mod']}" alt="{$imagen['id_mod']}-{$coleccion['id_col']}" class="img-thumbnail" width="100px" id="{$imagen['id_mod']}" />
                  <a class="glyphicon glyphicon-trash" href="admin_colecciones.php?action=borrar_modelo&id_mod={$imagen['id_mod']}"></a>

                {/foreach}
				</td>
		</tr>
	</tbody>
	{/foreach}             

</table>
                 
</div>               


<!-- Modal -->
<div class="modal fade" id="myModalColeccion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Colección</h4>
      </div>
      <div class="modal-body">
        <form action="admin_colecciones.php?action=agregar_coleccion" method="POST" enctype="multipart/form-data">
			<div class="bordes col-md-12">
	    	<input type="text" class="form-control" id="col" name="col" placeholder="Nombre de la nueva coleccion">	
	   		<input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
      		</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>

    </div>
  </div>
</div>
</div>
{/if}               
{include file="footer.tpl"}
