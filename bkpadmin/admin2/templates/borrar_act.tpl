<div class="modal-header">

  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {foreach $actividad as $act}
    <h3>¿Está seguro que desea eliminar la actividad {$act.nombre}?</h3>
    

  <div  class="modal-body">
    <h4>RECUERDE que junto a esta actividad también se eliminaran el/los siguientes profesores:</h4><br>
    {foreach $profeact as $profes}
    			{$profes.nombre} {$profes.apellido}<br>{$profes.horarios}
    			<br>
    {/foreach}
  </div>

  <div class="modal-footer text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button class="btn btn-danger" onClick = "borrarAct({$act['id']});" type="submit">Eliminar</button>
  </div>
{/foreach}

