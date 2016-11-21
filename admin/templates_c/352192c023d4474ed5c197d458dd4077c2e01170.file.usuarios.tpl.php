<?php /* Smarty version Smarty-3.1.14, created on 2016-11-20 22:53:40
         compiled from ".\templates\usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2661658321b64787992-21216696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '352192c023d4474ed5c197d458dd4077c2e01170' => 
    array (
      0 => '.\\templates\\usuarios.tpl',
      1 => 1479598874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2661658321b64787992-21216696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuarios' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58321b648d78e1_33087371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58321b648d78e1_33087371')) {function content_58321b648d78e1_33087371($_smarty_tpl) {?><div class="col-md-12">
    
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

      <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?> 
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
          <td class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['user']->value['apyno'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
          <td class="text-capitalize"><?php echo $_smarty_tpl->tpl_vars['user']->value['pass'];?>
</td>
          <td><button class="btn btn-warning" onClick = "cargaComentariosUsuario(<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
);" type="button" data-toggle="modal" data-target="#comentariosUsuario"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></button></td><!--consulta de comentarios y puntuaciones--></td><!--consulta de comentarios y puntuaciones-->
          <td><button class="btn btn-danger" onClick = "infoUsuario(<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
);" type="button" data-toggle="modal" data-target="#borrarUsuario"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
        </tr> 
      <?php } ?>
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

<?php }} ?>