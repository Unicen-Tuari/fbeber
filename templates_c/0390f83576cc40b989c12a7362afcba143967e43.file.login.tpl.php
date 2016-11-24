<?php /* Smarty version Smarty-3.1.14, created on 2016-11-24 02:44:14
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134315835deb5743ce9-70640714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1479951684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134315835deb5743ce9-70640714',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5835deb599d674_81178350',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5835deb599d674_81178350')) {function content_5835deb599d674_81178350($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/icono2.png"/> 
    <title>Gimnasio | Sitio Oficial</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

  </head>
  <body  class="text-center">
    <div class="col-md-1 icono">
      <img src="images/icono2.png" width="120px;">
    </div>
<!--primer sesion-->
<div class="col-md-5"></div>
    <div class="col-md-2 text-center">
    <h3>Iniciar Sesión</h3>
      <form id="formlogin" class="form-signin" method="post" ><br>
        <input id="email" name="email" type="text" class="form-control" placeholder="Correo elctrónico" autofocus=""><br>
        <input id="pass" name="pass" type="password" class="form-control" placeholder="Contraseña"><br>
        <div id="error" class="alert alert-danger" style="display: none;"></div>
        <button id="signin" class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
      <p><br>Si aún no se encuentra en el sistema, por favor registrese</p>
    <button class="btn btn-lg btn-success btn-block" type="button" data-toggle="modal" data-target="#form_usuario">Registrarse</button>
    <br><a class="btn btn-lg btn-warning btn-block" href="index.php">Ir a la Página Oficial</a>

</div>


<!-- Modal registrarse-->
<div class="modal fade" id="form_usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h3>Registrarse</h3>
        <div class="modal-body">
          <h4>Complete el siguiente formulario:</h4>
          <form id="add_user" action="" method="POST" enctype="multipart/form-data">
          <p><br>Nombre y Apellido</p>
          <input type="text" class="form-control" id="new_apyno_u" name="new_apyno_u"><br>
          <p><br>Correo Electrónico</p>
          <input type="text" class="form-control" id="new_email_u" name="new_email_u"><br>
          <p><br>Contraseña</p>
          <input type="password" class="form-control" id="new_pass_u" name="new_pass_u"><br>
                  
        </div>
    <div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  <a class="btn btn-success" href="#" onclick="agregaUsuario()" aria-hidden="true" data-dismiss="modal">Registrarse</a>
</form>
         </div>     
      </div>
    </div>
  </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>