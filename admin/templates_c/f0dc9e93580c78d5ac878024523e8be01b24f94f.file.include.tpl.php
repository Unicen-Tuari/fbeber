<?php /* Smarty version Smarty-3.1.14, created on 2016-11-21 22:30:41
         compiled from ".\templates\include.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2638058321b3bc25e93-49196694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0dc9e93580c78d5ac878024523e8be01b24f94f' => 
    array (
      0 => '.\\templates\\include.tpl',
      1 => 1479763828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2638058321b3bc25e93-49196694',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58321b3bd9cef4_19230041',
  'variables' => 
  array (
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58321b3bd9cef4_19230041')) {function content_58321b3bd9cef4_19230041($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (isset($_smarty_tpl->tpl_vars['email']->value)){?>
	<div id="contenido">
		<h1><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
<button id="logout" class="btn btn-primary">Salir</button><br><p class="text-success">
		<?php echo $_smarty_tpl->getSubTemplate ('index.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<!--NO ENTRA ACA-->
  </div>
    <?php }else{ ?>      
        <div class="col-md.6">
            <button id="logout" class="btn btn-primary">Salir</button>
        </div>
    <?php }?>
  

  
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>