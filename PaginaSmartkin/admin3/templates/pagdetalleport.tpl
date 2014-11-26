<div class="modal-header">
	<h4 class="modal-title">Portfolio</h4>
</div>
<form class="text-left" method="POST" action="">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_portfolio" value="{$detalleport.id_portfolio}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_portfolio" value="{$detalleport.nombre_portfolio}" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Imagen</span>
			<input class="form-control input-sm" type="text" name="img_port" value="{$detalleport.img_portfolio}" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borraport" class="color btn col-lg-3 pull-left">Borrar</button>
		</div>
	</div>
</form>