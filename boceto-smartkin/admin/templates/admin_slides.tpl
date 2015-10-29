<p>Estas imagenes se visualizarán como una presentación al inicio del sitio web Smartkin, se recomienda subir imagenes con datos a comunicar como novedad o noticia! ;)
<br>
*Dato: más de cuatro imagenes no se podra subir.</p>
<br>
<br>

	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Nombre</th>
				<th class="text-center">Slides</th>
				<th class="text-center">Eliminar</th>
			</tr>
		</thead>
		<tbody>
			{foreach $slides as $slide}
			<tr>
				<td>{$slide.id_slide}</td>
				<td>{$slide.path_slide}</td>
				<td><a class="glyphicon glyphicon-trash" href="index.php?action=borrar_slide&id_slide={$slide['id_slide']}"></a></td>
			</tr>
			{/foreach}
		</tbody>
	</table>