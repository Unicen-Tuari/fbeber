<div class="modal-header">
	<h4 class="modal-title">Usuarios</h4>
</div>
<form class="text-left" method="POST" action="">
	<div class="modal-body tt">
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">ID</span>
			<input class="form-control input-sm" type="text" name="id_usuario" value="{$detalleuser.id_usuario}" readonly>
		</div>
		<div class="form-group input-group">
			<span class="input-group-addon input-sm detallemodal">Nombre</span>
			<input class="form-control input-sm" type="text" name="nombre_usuario" value="{$detalleuser.nombre_usuario}" readonly>
		</div>
		<div class="form-group input-group margenb">
			<span class="input-group-addon input-sm detallemodal">Mail</span>
			<input class="form-control input-sm" type="mail" name="mail" value="{$detalleuser.email}" readonly>
		</div>
	</div>
	<div class="modal-footer">
		<div class="form-group">
			<button type="button" id="boton_borrauser" class="color btn col-lg-3 pull-left">Borrar</button>
		</div>
	</div>
</form>