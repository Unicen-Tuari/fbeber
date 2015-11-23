<div class="col-md-12"id="registrarse">
<div class="page-header"></div>  

{if !isset($usuario)}

    <h1>Registrarse</h1>

      <form action="index.php?action=agregar_usuario" method="POST" enctype="multipart/form-data">
      
            <input type="text" class="form-control" id="new_email" name="new_email" placeholder="Correo Electrónico"> 
            <input type="text" class="form-control" id="new_name" name="new_name" placeholder="Nombre de Usuario"> 
            <input type="password" class="form-control" id="new_pass" name="new_pass" placeholder="Contraseña"> 
            
          <button type="submit" class="btn btn-default">Listo!</button>       
              
      </form>

{/if}
</div>