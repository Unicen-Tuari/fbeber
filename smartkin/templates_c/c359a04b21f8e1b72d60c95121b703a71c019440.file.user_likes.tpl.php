<?php /* Smarty version Smarty-3.1.14, created on 2015-11-05 22:34:04
         compiled from "./templates/user_likes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268712943563bcb4c10b1a7-76451440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c359a04b21f8e1b72d60c95121b703a71c019440' => 
    array (
      0 => './templates/user_likes.tpl',
      1 => 1446757151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268712943563bcb4c10b1a7-76451440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'likes' => 0,
    'like' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_563bcb4c121ab8_49862454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563bcb4c121ab8_49862454')) {function content_563bcb4c121ab8_49862454($_smarty_tpl) {?><table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Modelo</th>
        		<th class="text-center">NO LIKE</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['like'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['like']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['likes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['like']->key => $_smarty_tpl->tpl_vars['like']->value){
$_smarty_tpl->tpl_vars['like']->_loop = true;
?>
			<tr>
	            <td><?php echo $_smarty_tpl->tpl_vars['like']->value['path_mod'];?>
</td>
	            <td><a class="" href="index.php?action=borrar_like&id_like=<?php echo $_smarty_tpl->tpl_vars['like']->value['id_like'];?>
">No me gusta</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
                 
       
                  
                  


	<?php }} ?>