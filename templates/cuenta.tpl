<!--datos del usuario-->
{if isset($usuario)}
<h3>Bienvenido a su panel de control</h3>
<div class="col-md-12">
<div class="col-md-12">
  <h4>Datos Personales</h4>
  <p class=""><b>Nombre y Apellido:</b> {$usuario[0].apyno} | 
   <b>Correo Electrónico:</b> {$usuario[0].email} | 
  <a class="text-center" href="#" data-toggle="modal" data-target="#modificarDatos"><span class="label label-info">Modificar Datos y contraseña</span></a></p>

</div>

<div class="col-md-6"><!--ver los comentarios que realizo del usuario-->
  <h3>Mis Comentarios</h3>
  <table class="table">
    <tr>
      <td><b>Actividad</b></td>
      <td class="text-left"><p>Comentario</p></td>
      <td><b>5 </b><span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span></td>
      <td class="text-right"><button type="button" class="label label-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
    </tr>
  </table>
</div>
<div class="col-md-6"><!--ver en las actividades que esta inscripto el usuario-->
  <h3>Mis Actividades</h3>
  <table class="table">
    <tr>
      <td><b>Actividad</b></td>
      <td>Profesor</td>
      <td>Dias y Horarios</td>
      <td class="text-right"><button type="button" class="label label-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
    </tr>
  </table>
</div>
</div>
<!--borrar actividad-->
<div id="modificarDatos" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div id="infoProfeAct" class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Modificar datos</h4>
</div>

<div class="modal-body">

  <form id="modifica_datos" method="post">
    <input type="hidden" class="form-control" id="upd_id_u" name="upd_id_u" value="{$usuario[0].id}"><br>
    <p>Nombre:</p><input type="text" class="form-control" id="upd_apyno_u" name="upd_apyno_u" value="{$usuario[0].apyno}"><br>
    <p>Contraseña:</p><input type="text" class="form-control" id="upd_email_u" name="upd_email_u" value="{$usuario[0].email}"><br>
    <p>Contraseña:</p><input type="password" class="form-control" id="upd_pass_u" name="upd_pass_u" value="{$usuario[0].pass}"><br>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
<a class="btn btn-info" href="#" onclick="modUsuario();" aria-hidden="true" data-dismiss="modal">
Modificar</a>
</div>

</form>
</div>
</div>
</div>
{/if}
