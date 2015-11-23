<p>Por defecto las Nuevas colecciones no se publicarán. Para poder visualizarlas en la sección "Colecciones" en el sitio web, haga click en el botón "Publicar".</p>

<form action="index.php?action=agregar_coleccion" method="POST" enctype="multipart/form-data">
<div class="bordes col-md-12">
<h2>Nueva Colección</h2>
<div class="bordes col-md-2"></div>
<div class="bordes col-md-3">
    	<h3>Paso 1</h3>
    	<input type="text" class="form-control" id="col" name="col" placeholder="Nombre de la nueva coleccion">	
</div>
<div class="bordes col-md-3">
  		<h3>Paso 2</h3>
   		<input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
</div>
<div class="bordes col-md-2">
    <h3>Paso 3</h3>
    <button type="submit" class="btn btn-default">Listo!</button>      	
</div>
<div class="bordes col-md-2"></div>
</div>
       	
</form>
<div class="bordes col-md-12">
<h2>Listado de colecciones</h2>
<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Nombre</th>
				<th class="text-center">Publicar / No Publicar</th>
				<th class="text-center">Borrar</th>
				<th class="text-center">Modelos</th>
			</tr>
		</thead>
    	
    	<tbody>
    		
			{foreach $colecciones as $coleccion}	
			<tr>
				{if !$coleccion['publico']}
					<td><s>{$coleccion.name_col}</s></td>
					<td><a class="glyphicon glyphicon-ok" href="index.php?action=no_publicar_coleccion&id_col={$coleccion['id_col']}"><button type="submit" class="btn btn-default">Publicar</button></a></td>

				{else}
                    {$coleccion['name_col']}
                    <td>{$coleccion.name_col}</td>
					<td><a class="glyphicon glyphicon-ok" href="index.php?action=publicar_coleccion&id_col={$coleccion['id_col']}"><button type="submit" class="btn btn-default">No Publicar</button></a></td>
				{/if}

					<td><a class="glyphicon glyphicon-trash" href="index.php?action=borrar_coleccion&id_col={$coleccion['id_col']}"></a></td>

				
					
				<td class="text-left">
				<button type="submit" class="btn btn-default"> <a class="botonAgregarImagenes" href="index.php?action=agregar_modelos&id_col={$coleccion['id_col']}">Agregar<br>Modelos</button></a>
				{foreach $coleccion['imagenes'] as $imagen}
                  
                  <img src="{$imagen['path_mod']}" alt="{$imagen['id_mod']}-{$coleccion['id_col']}" class="img-thumbnail" width="100px" id="{$imagen['id_mod']}" />
                  <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_modelo&id_mod={$imagen['id_mod']}"></a>

                {/foreach}
				</td>
		</tr>{/foreach}
	</tbody>
</table>
                 
   </div>               
                  
                  
                  


	