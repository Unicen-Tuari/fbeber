<?php /* Smarty version 3.1.27, created on 2015-12-17 12:45:13
         compiled from "/opt/lampp/htdocs/Smartkin/templates/portfolios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13178190885672a049ed0093_15409582%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b27b28a55de5123bcce014cb811c18f0c0ce7492' => 
    array (
      0 => '/opt/lampp/htdocs/Smartkin/templates/portfolios.tpl',
      1 => 1450352708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13178190885672a049ed0093_15409582',
  'variables' => 
  array (
    'portfolios' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5672a04a0175d7_94163911',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5672a04a0175d7_94163911')) {
function content_5672a04a0175d7_94163911 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13178190885672a049ed0093_15409582';
?>
<article>
	<section>
			<?php
$_from = $_smarty_tpl->tpl_vars['portfolios']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['imagen']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
$foreach_imagen_Sav = $_smarty_tpl->tpl_vars['imagen'];
?>								          
                   	
			<div class="col-md-2 portfolio">
        		<img src="./admin/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_port'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
" width="90%" >
        		<h6><?php echo $_smarty_tpl->tpl_vars['imagen']->value['descripcion'];?>
</h6>
             </div>
                	
			<?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
		
	</section>
</article>
<?php }
}
?>