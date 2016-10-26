<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  
{foreach $profesor as $profe}
<h3>¿Está seguro que desea eliminar al profesor {$profe.nombre}?</h3>
    
<div  class="modal-body">
  <h4><img src="../images/{$profe.foto}"></h4><br>
</div>

<div class="modal-footer text-center">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
  <a class="btn btn-danger" href="#" onclick="borraProfe('{$profe.id}')" aria-hidden="true" data-dismiss="modal">Eliminar</a>
</div>
{/foreach}

