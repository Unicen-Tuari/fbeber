<div class="modal-header">
{foreach $actividad as $act}
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Modificar los datos de {$act.nombre}</h4>
</div>

<div class="modal-body">

	<form id="modifica_actividad" method="post">
   	<input type="hidden" class="form-control" id="id_act" name="id_act" value="{$act.id}"><br>
  	<p>Nombre:</p><input type="text" class="form-control" id="upd_nombre_a" name="upd_nombre_a" value="{$act.nombre}"><br>

  	<p>Descripción:</p><input type="text" class="form-control" id="upd_descripcion_a" name="upd_descripcion_a" value="{$act.descripcion}"><br>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
<a class="btn btn-info" href="#" onclick="modAct();" aria-hidden="true" data-dismiss="modal">
Modificar</a>{/foreach}
</div>

</form>