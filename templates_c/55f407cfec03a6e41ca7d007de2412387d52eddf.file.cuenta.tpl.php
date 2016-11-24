<?php /* Smarty version Smarty-3.1.14, created on 2016-11-24 21:00:40
         compiled from ".\templates\cuenta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25815583590d809e143-15062529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55f407cfec03a6e41ca7d007de2412387d52eddf' => 
    array (
      0 => '.\\templates\\cuenta.tpl',
      1 => 1480017637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25815583590d809e143-15062529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_583590d815d7f9_95441254',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583590d815d7f9_95441254')) {function content_583590d815d7f9_95441254($_smarty_tpl) {?><!--datos del usuario-->
<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?>
<h3>Bienvenido a su panel de control</h3>
<div class="col-md-12">
<div class="col-md-12">
  <h4>Datos Personales</h4>
  <p class=""><b>Nombre y Apellido:</b> <?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['apyno'];?>
 | 
   <b>Correo Electrónico:</b> <?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['email'];?>
 | 
  <a class="text-center" href="#" data-toggle="modal" data-target="#modificarDatos"><span class="label label-info">Modificar Datos y contraseña</span></a></p>
</div>
 
<div class="col-md-6"><!--ver los comentarios que realizo del usuario-->
  <h3>Mis Comentarios</h3>
  <button id="id_usuario" onClick = "cargaMiscomentarios(<?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['id'];?>
);" class="btn 
  btn-success" type="button">Cargar Comentarios</button>
  <div id="tableMiscomentarios">aca che
  </div>
</div>



<!--modificar datos-->
<div id="modificarDatos" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div id="infoProfeAct" class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title" id="myModalLabel">Modificar datos</h4>
</div>
<div class="modal-body">
  <form id="modifica_datos" method="post">
    <input type="hidden" class="form-control" id="upd_id_u" name="upd_id_u" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['id'];?>
"><br>
    <p>Nombre:</p><input type="text" class="form-control" id="upd_apyno_u" name="upd_apyno_u" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['apyno'];?>
"><br>
    <p>Contraseña:</p><input type="text" class="form-control" id="upd_email_u" name="upd_email_u" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value[0]['email'];?>
"><br>
    <p>Contraseña:</p><input type="password" class="form-control" id="upd_pass_u" name="upd_pass_u"><br>
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
<?php }?>
<?php }} ?>