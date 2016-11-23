<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 13:52:54
         compiled from ".\templates\cuenta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25815583590d809e143-15062529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55f407cfec03a6e41ca7d007de2412387d52eddf' => 
    array (
      0 => '.\\templates\\cuenta.tpl',
      1 => 1479905570,
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
  <p class=""><b>Nombre y Apellido:</b>Florencia Beber | 
   <b>Correo Electrónico:</b>florencia@gmail.com | 
  <a class="text-center" href="#" onclick="agregaUsuario()"><span class="label label-info">Modificar Datos y contraseña</span></a></p>

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
<?php }?>
<?php }} ?>