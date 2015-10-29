<br>
<br>
<p class="text-center">Esta información se publicará en la sección "Contacto" del sitio web Smartkin.<br>
Para modificar, borrar o agregar información solo haz click en el icono correspondiente</p>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Telefono 1</th>
				<th class="text-center">Telefono 2</th>
				<th class="text-center">Direccion 1</th>
				<th class="text-center">Direccion 2</th>
				<th class="text-center">Email</th>
				<th class="text-center">Otro</th>
			</tr>
		</thead>
		<tbody>
			{foreach $informacion as $info}
			<tr>
				<td>{$info.tel1}</td>
				<td>{$info.tel2}</td>	
				<td>{$info.dir1}</td>	
				<td>{$info.dir2}</td>	
				<td>{$info.email}</td>	
				<td>{$info.otro}</td>	
			</tr>
			{/foreach}
		</tbody>
	</table>