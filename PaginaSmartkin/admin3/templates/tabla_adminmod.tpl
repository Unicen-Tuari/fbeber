<br>
	<h3>Modelos</h3>
	<button type="button" class="btn btn-primary glyphicon glyphicon-plus" onclick="location.href='./add/insertarModelos/index.php'">
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
			{foreach $modelos as $modelo}
			<tr>
				<td>{$modelo.id_modelo}</td>
				<td>{$modelo.nombre_modelo}</td>
				<td>{$modelo.img_modelo}</td>
			</tr>
			{/foreach}
		</tbody>
	</table>