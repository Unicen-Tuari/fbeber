<div class="col-md-12">
<h1>Actividades</h1><br>
    <!--todas las actividades-->
{foreach $actividades as $actividad}
{if $actividad.id != 1}
  <div class="col-md-4">
  <div class="promocion3">
    <h3>{$actividad.nombre}</h3>
    <div class="col-md-12 text-center">

    {foreach $actividad['imagenes'] as $imagen}
    <img src="images/{$imagen.foto}" class="zoom" width="80px" height="80px">
    {/foreach}  

    </div>
    <div class="col-md-12" style="height: 100px"><p><br>{$actividad.descripcion}</p></div>
    <h4>..............</h4>
    <h5>Déjenos su puntaje y un comentario</h5>
    {if isset($usuario)}
        <form id="agregar_com" method="POST" enctype="multipart/form-data">
        <input type="hidden" class="form-control" id="new_idAct_c" name="new_idAct_c" value="{$actividad.id}">
        <input type="hidden" class="form-control" id="new_idUser_c" name="new_idUser_c" value="{$usuario[0].id}">
        <div class="col-md-12">
        <div class="col-md-10"><input type="text" class="col-md-8 form-control" id="new_comentario" name="new_comentario" placeholder="Agregue su comentario">
        Su puntaje:
        {for $i = 1; $i <= 5; $i++} <input type="radio" name="new_puntaje" value='{$i}' id="new_puntaje">{$i}{/for}
        </div>
        <div class="col-md-2 text-left"><a class="btn btn-success" href="#" onclick="agregaComentario()">Listo</a>
        </div></div>
        </form>
    {else}
      Para comentar es necesario estar registrado: <a href="login.php"><span class="label label-warning">Iniciar Sesión / Registrarse</span></a>
    {/if}
    <h4>..............</h4>
    <button id="id_act_c" onClick = "cargaComentarios({$actividad['id']});" class="btn btn-success" type="button" data-toggle="modal" data-target="#comentarios">Comentarios</button>
    <button id="id_actividad" onClick = "cargaProfesores({$actividad['id']});" class="btn btn-info" type="button" data-toggle="modal" data-target="#horarios">Horarios e Inscripción</button> 
  </div>
  </div>
  {/if}
  {/foreach}
  </div> 
  </div>

<!-- Modal dias y horarios-->
<div class="modal fade" id="horarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h3>Horarios e Inscripciones</h3>
        <div id="tableProfesores" class="modal-body"></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal comentarios-->
<div class="modal fade" id="comentarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h3>Comentarios</h3>
        <div id="tableComentarios" class="modal-body"></div>     
      </div>
    </div>
  </div>
</div>


