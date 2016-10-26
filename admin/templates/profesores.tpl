    
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
        <td><b>ID</b></td>
        <td><b>APELLIDO</b></td>
        <td><b>NOMBRE</b></td>
        <td><b>DNI</b></td>
        <td><b>DESCRIPCIÓN</b></td>
        <td><b>ACTIVIDAD</b></td>
        <td><b>DIAS Y HORARIOS</b></td>
        <td><b>MODIFICAR</b></td>
        <td><b>ELIMINAR</b></td>
      </tr>
        {foreach $profesores as $profesor}
        <tr id="datosActividad">
          <td><img src="../images/{$profesor.foto}" alt="..." class="img-circle zoom" width="50px" height="50px"></td>
          <td>{$profesor.id}</td>
          <td>{$profesor.apellido}</td>
          <td>{$profesor.nombre}</td>
          <td>{$profesor.dni}</td>
          <td>{$profesor.descripcion}</td>
          <td>{$profesor.nombreAct}</td>
          <td>{$profesor.horarios}</td>
          <td><button class="btn btn-info" onClick = "modifProfesor({$profesor['id']});" type="button" data-toggle="modal" data-target="#modificarProfesor"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
          <td><button class="btn btn-danger" onClick = "infoProfesor({$profesor['id']});" type="button" data-toggle="modal" data-target="#borrarProfesor"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
          </tr>  
          {/foreach}
    </table>       
</div>

<!--MODALs ABM-->
<!--Agregar profesor-->
<div id="agregarProfesor" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    </div>
  </div>
</div>
 

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
<div id="modifProfesor" class="modal-content">
<h3>okey</h3>
</div>
</div>
</div>

