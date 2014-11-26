<br>
	<h3>Usuarios</h3>

	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">ID</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Mail</th>
			</tr>
		</thead>
		<tbody>
			{foreach $usuarios as $usuario}
			<tr>
				<td>{$usuario.id_usuario}</td>
				<td>{$usuario.nombre_usuario}</td>
				<td>{$usuario.email}</td>
			</tr>
			{/foreach}
		</tbody>
	</table>