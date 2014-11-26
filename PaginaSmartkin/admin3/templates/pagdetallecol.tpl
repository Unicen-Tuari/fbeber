<div class="modal-header">
	<h4 class="modal-title">Coleccion</h4>
</div>
<form class="text-left" method="POST" action="">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_coleccion" value="{$detallecol.id_coleccion}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_coleccion" value="{$detallecol.nombre_coleccion}" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Mail</span>
			<input class="form-control input-sm" type="text" name="img_col" value="{$detallecol.img_coleccion}" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borracol" class="color btn col-lg-3 pull-left">eliminar</button>
			<button type="button" id="boton_modificacol" class="color btn col-lg-3 pull-right">editar</button>
		</div>
	</div>
</form>