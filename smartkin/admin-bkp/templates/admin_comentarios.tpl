<br>
<br><p>El poder tener un listado del total de los comentarios con la opcion de eliminarlos, nos posibilita eliminar aquellos comentarios con palabras inadecuadas, y acorde a esto tomar la desicion de bloquear al usuario en cuestión. </p>


	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Foto</th>
				<th class="text-center">Usuario</th>
				<th class="text-center">Fecha</th>
				<th class="text-center">Comentario</th>
				<th class="text-center">Borrar</th>
			</tr>
		</thead>
		<tbody>
			{foreach $comentarios as $comentario}
			<tr>
				<td>{$comentario.img_user}</td>
					{if $comentario['bloqueado']}
				<td> 
					<a class="" href="index.php?action=no_habilitar_usuario&id_user={$comentario['id_user']}">Bloquear</a> | {$comentario.name_user}
				</td>
				{else}
				<td>
					<s>{$comentario.name_user}</s>
				</td>	
				{/if}
				<td>{$comentario.fecha_com}</td>
				<td>{$comentario.comentario}</td>
				<td><a class="glyphicon glyphicon-trash" href="index.php?action=borrar_comentario&id_com={$comentario['id_com']}"></a></td>
			</tr>
			{/foreach}
		</tbody>
	</table>