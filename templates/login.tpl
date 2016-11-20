
<!--primer sesion-->
<div class="col-md-2"></div>
<div class="col-md-8 text-center">
    <div class="col-md-5 text-center">
    <h3>Iniciar Sesión</h3>
      <form id="formlogin" class="form-signin" method="post" ><br>
        <input id="email" name="email" type="text" class="form-control" placeholder="Correo elctrónico" autofocus=""><br>
        <input id="pass" name="pass" type="password" class="form-control" placeholder="Contraseña"><br>
        <div id="error" class="alert alert-danger" style="display: none;"></div>
        <button id="signin" class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
      Si aún no se encuentra en el sistema, por favor registrese
    </div>
  <div class="col-md-2"></div>
    
  <div class="col-md-5">
  <h3>Registrarse</h3>
  <h4>Complete el siguiente formulario:</h4>
  <form id="agregar_user" method="POST" enctype="multipart/form-data">
    <br><input type="text" class="form-control" id="new_apyno_u" name="new_apyno_u" placeholder="Nombre y Apellido"><br>
    <br><input type="mail" class="form-control" id="new_email_u" name="new_email_u" placeholder="Correo Electrónico"><br>
    <br><input type="password" class="form-control" id="new_pass_u" name="new_pass_u" placeholder="Contraseña"><br>
    <a class="btn btn-lg btn-success btn-block" href="#" onclick="agregaUsuario()">Agregar</a>
  </form>
  </div>
</div>
<div class="col-md-2"></div>
