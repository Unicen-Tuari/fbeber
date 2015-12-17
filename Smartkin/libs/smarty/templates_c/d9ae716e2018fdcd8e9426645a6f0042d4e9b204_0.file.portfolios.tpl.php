<?php /* Smarty version 3.1.27, created on 2015-12-17 03:45:01
         compiled from "/opt/lampp/htdocs/lruggiero-master/templates/portfolios.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:991382751567221ad508794_12015877%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9ae716e2018fdcd8e9426645a6f0042d4e9b204' => 
    array (
      0 => '/opt/lampp/htdocs/lruggiero-master/templates/portfolios.tpl',
      1 => 1450320298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '991382751567221ad508794_12015877',
  'variables' => 
  array (
    'portfolios' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567221ad58ef10_00627193',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567221ad58ef10_00627193')) {
function content_567221ad58ef10_00627193 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '991382751567221ad508794_12015877';
?>
<article>
	<h1>PORTFOLIOS</h1>
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
                   	

<!--galerias-->         <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_port'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
" >
                				
                	
			<?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
		
	</section>
</article>
<?php }
}
?>