<br>
<h3>Categor&iacute;as</h3>
		<button type="button" class="btn btn-primary glyphicon glyphicon-plus" onclick="location.href='./add/insertarCategorias/index.php'">
	  Agregar
	</button>
<br>
<br>
<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
			</tr>
		</thead>
		<tbody>
			{foreach $categorias as $categoria}
			<tr>
				<td>{$categoria.id_categoria}</td>
				<td>{$categoria.nombre_categoria}</td>
			</tr>
			{/foreach}
		</tbody>
	</table>