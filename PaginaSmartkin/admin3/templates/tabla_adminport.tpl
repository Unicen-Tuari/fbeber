<br>
	<h3>Portfolios</h3>
	<button type="button" class="btn btn-primary glyphicon glyphicon-plus"  onclick="location.href='./add/insertarPortfolios/index.php'">
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
			{foreach $portfolios as $portfolio}
			<tr>
				<td>{$portfolio.id_portfolio}</td>
				<td>{$portfolio.nombre_portfolio}</td>
				<td>{$portfolio.img_portfolio}</td>
			</tr>
			{/foreach}
		</tbody>
	</table>