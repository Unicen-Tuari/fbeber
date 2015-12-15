{include file="header.tpl"}

{if isset($comentarios)}
<h2>Comentarios</h2>
	<table class="table table-bordered">
		<thead>
			<tr class="active">
				<th class="text-center">Foto</th>
				<th class="text-center">Usuario</th>
				<th class="text-center">Fecha</th>
				<th class="text-center">Comentario</th>
				<th class="text-center">Borrar</th>
			</tr>
		</thead>

		{foreach $comentarios as $comentario}
		<tbody>
			{if !$comentario['bloqueado']}
			<tr>
				<td><img src=".{$comentario.img_user}" class="icon_user" width="30px;"></td>
					
				<td> 
					{$comentario.name_user}
				</td>
				
				<td>{$comentario.fecha_com}</td>
				<td>{$comentario.comentario}</td>
				<td><a class="glyphicon glyphicon-trash" href="admin_comentarios.php?action=borrar_comentario&id_com={$comentario['id_com']}"></a></td>
			</tr>
			{/if}
		</tbody>
		{/foreach}
	</table>
	
{/if}
{include file="footer.tpl"}