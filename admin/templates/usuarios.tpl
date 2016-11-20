<div class="col-md-12">
    
    <h1>Usuarios</h1>
    <br>
 
    <!--todas las actividades-->

    <table class="table table-striped">
      <tr>
        <td><b>ID</b></td>
        <td><b>NOMBRE Y APELLIDO</b></td>
        <td><b>EMAIL</b></td>
        <td><b>CONTRASEÑA</b></td>
        <td><b>COMENTARIOS</b></td>
        <td><b>ELIMINAR</b></td>
      </tr>

      {foreach $usuarios as $user} 
        <tr>
          <td>{$user.id}</td>
          <td class="text-uppercase">{$user.apyno}</td>
          <td>{$user.email}</td>
          <td class="text-capitalize">{$user.pass}</td>
          <td><button class="btn btn-warning" onClick = "cargaComentariosUsuario({$user.id});" type="button" data-toggle="modal" data-target="#comentariosUsuario"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></button></td><!--consulta de comentarios y puntuaciones--></td><!--consulta de comentarios y puntuaciones-->
          <td><button class="btn btn-danger" onClick = "infoUsuario({$user.id});" type="button" data-toggle="modal" data-target="#borrarUsuario"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
        </tr> 
      {/foreach}
    </table>       
</div>

<!--MODALs ABM-->


<!--borrar usuario-->
<div id="borrarUsuario" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div id="infoUsuario" class="modal-content">
</div>
</div>
</div>

<!--comentarios usuario-->
<div id="comentariosUsuario" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div id="comUsuario" class="modal-content">
llega  aca
</div>
</div>
</div>

