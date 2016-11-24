<?php /* Smarty version Smarty-3.1.14, created on 2016-11-24 21:02:36
         compiled from ".\templates\miscomentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31670583706a39160c6-53441630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb4e43aa08cebd9b960742739da84f69e940be1' => 
    array (
      0 => '.\\templates\\miscomentarios.tpl',
      1 => 1480017754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31670583706a39160c6-53441630',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_583706a3e80d81_17078726',
  'variables' => 
  array (
    'miscomentarios' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583706a3e80d81_17078726')) {function content_583706a3e80d81_17078726($_smarty_tpl) {?><table class="table">
    <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['miscomentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?>
    <tr>
      <td><b>Actividad: <?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</b></td>
      <td class="text-left"><p>Comentario: <?php echo $_smarty_tpl->tpl_vars['dato']->value['comentario'];?>
</p></td>
      <td><b><?php echo $_smarty_tpl->tpl_vars['dato']->value['puntaje'];?>
 </b><span class="glyphicon glyphicon-star" aria-hidden="true" style="color: orange"></span></td>
      
      <td class="text-right"><button class="btn btn-default" onClick = "infoComentario(<?php echo $_smarty_tpl->tpl_vars['dato']->value['id'];?>
);" type="button" data-toggle="modal" data-target="#borrarComentario"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
    </tr>
    <?php } ?>
  </table>

  <!--borrar comentario-->
<div id="borrarComentario" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div id="infoComentario" class="modal-content">
<h1>llega a aca</h1>
</div>
</div>
</div><?php }} ?>