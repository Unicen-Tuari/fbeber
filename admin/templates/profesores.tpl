    
    <div class="col-md-12">
    <h1>Profesores</h1>
    <br>
      <div class="col-md-12 text-center"><button class="btn btn-success" data-toggle="modal" data-target="#agregarProfesor">Agregar Profesor</button>
      </div>    
    </div>

    <div class="col-md-12">
    <br>
    <!--todas las actividades-->
    <table class="table table-striped">
      <tr>
        <td><b>FOTO</b></td>
        <td><b>NOMBRE Y APELLIDO</b></td>
        <td><b>DNI</b></td>
        <td><b>DESCRIPCIÓN</b></td>
        <td><b>EMAIL</b></td>
        <td><b>ACTIVIDAD</b></td>
        <td><b>DIAS Y HORARIOS</b></td>
        <td><b>MODIFICAR</b></td>
        <td><b>ELIMINAR</b></td>
      </tr>
        {foreach $profesores as $profesor}
        {if $profesor.is_admin == 1}
        <tr id="datosActividad">
          <td><img src="../images/{$profesor.foto}" alt="..." class="img-circle zoom" width="50px" height="50px"></td>
          <td>{$profesor.apyno}</td>
          <td>{$profesor.dni}</td>
          <td>{$profesor.descripcion}</td>
          <td>{$profesor.email}</td>
          <td>{$profesor.nombreAct}</td>
          <td>{$profesor.horarios}</td>
          <td><button class="btn btn-info" onClick = "profeActividades({$profesor['id']});" type="button" data-toggle="modal" data-target="#modificarProfesor"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button></td>
          <td><button class="btn btn-danger" onClick = "infoProfesor({$profesor['id']});" type="button" data-toggle="modal" data-target="#borrarProfesor"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
          <td>{$profesor.is_admin}</td>
          <td>{$profesor.pass}</td>
          </tr> 
        {/if} 
          {/foreach}
    </table>  
    <br>

    <h1>Administradores</h1>
    <p>*para eliminar un administrador es necesario quitarle los permisos (modificar)</p>
    <table class="table table-striped">
      <tr>
        <td><b>FOTO</b></td>
        <td><b>NOMBRE Y APELLIDO</b></td>
        <td><b>DNI</b></td>
        <td><b>DESCRIPCIÓN</b></td>
        <td><b>EMAIL</b></td>
        <td><b>ACTIVIDAD</b></td>
        <td><b>DIAS Y HORARIOS</b></td>
        <td><b>MODIFICAR</b></td>
      </tr>
      {foreach $profesores as $profesor}
      {if $profesor.is_admin == 0}
        <tr id="datosActividad">
          <td><img src="../images/{$profesor.foto}" alt="..." class="img-circle zoom" width="50px" height="50px"></td>
          <td>{$profesor.apyno}</td>
          <td>{$profesor.dni}</td>
          <td>{$profesor.descripcion}</td>
          <td>{$profesor.email}</td>
          <td>{$profesor.nombreAct}</td>
          <td>{$profesor.horarios}</td>
          <td><button class="btn btn-info" onClick = "profeActividades({$profesor['id']});" type="button" data-toggle="modal" data-target="#modificarProfesor"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button></td>
                    <td>{$profesor.is_admin}</td>

        </tr> 
        {/if} 
        {/foreach}
      </table>  
</div>

<!--MODALs ABM-->
<!--Agregar profesor-->
<div id="agregarProfesor" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3>Agregar Profesor</h3>
      
          <div  class="col-md-12 modal-body">
            <form id="agregar_profesor">
              <h4>Datos personales</h4>
              <div class="col-md-12 text-center"><p>Seleccione foto de perfil:</p>
              <input type="file" name="imagesToUpload[]" id="imagesToUpload" class="form-control"/><br>
              </div>
              <div class="col-md-6"><p>Nombre y Apellido:</p><input type="text" id="new_apyno_p" name="new_apyno_p" class="form-control"></div>              
              <div class="col-md-6"><p>DNI:</p><input type="text" id="new_dni_p" name="new_dni_p" class="form-control"></div>
              <div class="col-md-6"><p><br>Correo Electrónico:</p><input type="text" id="new_email_p" name="new_email_p" class="form-control"></div>
              <div class="col-md-6"><p><br>Contraseña:</p><input type="password" id="new_pass_p" name="new_pass_p" class="form-control"></div>
              <div class="col-md-12"><br><p>Descripción breve del profesor:</p><textarea id="new_descripcion_p" name="new_descripcion_p" class="form-control"></textarea><br><br></div>
              <h4>Datos de la actividad</h4>
              <div class="col-md-6"><p>Seleccione la actividad:</p></div>
              <div class="col-md-6"><select id="new_id_act_p" name="new_id_act_p" class="form-control">
            <option>Ver todas</option>
              {foreach $actividades as $actividad}
              {if $actividad.id != 1}
              <option value="{$actividad.id}">{$actividad.nombre}</option>
              {/if}
              {/foreach}
            </select></div>
              <div class="col-md-12"><p>Detalle los días y horarios que dictará la actividad previamente seleccionada:</p><input type="text" id="new_horarios_p" name="new_horarios_p" class="form-control"></div>

            </form>
      </div>
       <div class="modal-footer text-center">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <a class="btn btn-success" href="#" onclick="agregaProfe()" aria-hidden="true" data-dismiss="modal">Agregar</a>
  </div>
    </div>
  </div>
</div></div>
 

<!--borrar profesor-->
<div id="borrarProfesor" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div id="infoProfesor" class="modal-content">
</div>
</div>
</div>

<!--Modificar profesor-->
<div id="modificarProfesor" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div id="infoProfeActividades" class="modal-content">
<h3>okey</h3>
</div>
</div>
</div>

