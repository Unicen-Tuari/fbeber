{include file="header.tpl"}
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
				<td><img src=".{$comentario.img_user}" class="icon_user"></td>
					
				<td> 
					{$comentario.name_user}
				</td>
				
				<td>
					<s>{$comentario.name_user}</s>
				</td>	
				
				<td>{$comentario.fecha_com}</td>
				<td>{$comentario.comentario}</td>
				<td><a class="glyphicon glyphicon-trash" href="admin_comentarios.php?action=borrar_comentario&id_com={$comentario['id_com']}"></a></td>
			</tr>
			{/foreach}
		</tbody>
	</table>