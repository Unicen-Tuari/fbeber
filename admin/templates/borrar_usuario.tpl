<div class="modal-header">

  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {foreach $usuario as $user}
    <h3>Borrar usuario</h3>
    

  <div  class="modal-body">
    <h4>¿Está seguro que desea eliminar al usuario {$user.apyno}?</h4>
  </div>

  <div class="modal-footer text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <a class="btn btn-danger" href="#" onclick="borraUsuario('{$user.id}')" aria-hidden="true" data-dismiss="modal">Eliminar</a>
  </div>
{/foreach}

