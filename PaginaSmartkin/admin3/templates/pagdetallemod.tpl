<div class="modal-header">
	<h4 class="modal-title">Modelos</h4>
</div>
<form class="text-left" method="POST" action="">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_modelo" value="{$detallemod.id_modelo}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_modelo" value="{$detallemod.nombre_modelo}" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Imagen</span>
			<input class="form-control input-sm" type="text" name="img_mod" value="{$detallemod.img_modelo}" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borramod" class="color btn col-lg-3 pull-left">Borrar</button>
		</div>
	</div>
</form>