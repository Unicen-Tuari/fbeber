<br><br>
<p>Listado de usuarios registrados, en esta sección se podrá habilitar o deshabilitar aquellos usuarios que se desee.</p>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Foto</th>
				<th class="text-center">Nombre</th>
				<th class="text-center">Mail</th>
        <th class="text-center">Habilitar/Deshabilitar</th>
			</tr>
		</thead>
		<tbody>
			{foreach $usuarios as $usuario}
			<tr>
        {if $usuario['habilitado']}
            <td>{$usuario.img_user}</td>
            <td>{$usuario['name_user']}</td>
            <td>{$usuario.email}</td>
            <td> <a class="glyphicon glyphicon-ok" href="index.php?action=no_habilitar_usuario&id_user={$usuario['id_user']}"><button type="submit" class="btn btn-default">Deshabilitar</button></a></td>
          {else}
            <td>{$usuario.img_user}</td>
          <td><s>{$usuario['name_user']}</s></td>
          <td><s>{$usuario.email}<s></td>
          <td><a class="glyphicon glyphicon-ok" href="index.php?action=habilitar_usuario&id_user={$usuario['id_user']}"><button type="submit" class="btn btn-default">Habilitar</button></a></td>
          {/if}
				
			</tr>
			{/foreach}
		</tbody>
	</table>