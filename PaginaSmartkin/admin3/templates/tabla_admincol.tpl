<br>
	<h3>Colecciones</h3>
	<button type="button" class="btn btn-primary glyphicon glyphicon-plus" onclick="location.href='./add/insertarColecciones/index.php'">
		Agregar
	</button>
<br>
<br>

	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Imagen</th>
			</tr>
		</thead>
		<tbody>
			{foreach $colecciones as $coleccion}
			<tr>
				<td>{$coleccion.id_coleccion}</td>
				<td>{$coleccion.nombre_coleccion}</td>
				<td>{$coleccion.img_coleccion}</td>
			</tr>
			{/foreach}
		</tbody>
	</table>