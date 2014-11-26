<div class="modal-header">
	<h4 class="modal-title">Categoria</h4>
</div>
<form class="text-left" method="POST" action="" id="actualiza_cat">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_categoria" value="{$detallecat.id_categoria}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_categoria" value="{$detallecat.nombre_categoria}" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borracat" class="color btn col-lg-3 pull-left">Borrar</button>
		</div>
	</div>
</form>