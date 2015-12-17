<?php /* Smarty version 3.1.27, created on 2015-12-17 03:53:06
         compiled from "/opt/lampp/htdocs/lruggiero-master/templates/colecciones.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11383876045672239216ba51_93388960%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2343f7647389d86eab009130c4a2da99f61c1bc' => 
    array (
      0 => '/opt/lampp/htdocs/lruggiero-master/templates/colecciones.tpl',
      1 => 1450320781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11383876045672239216ba51_93388960',
  'variables' => 
  array (
    'colecciones' => 0,
    'modelo' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_567223922110b5_20067171',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_567223922110b5_20067171')) {
function content_567223922110b5_20067171 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11383876045672239216ba51_93388960';
?>
<article>
	<h1>COLECCIONES</h1>
	<section>
		<?php if (isset($_smarty_tpl->tpl_vars['colecciones']->value)) {?>
			<?php
$_from = $_smarty_tpl->tpl_vars['colecciones']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['modelo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['modelo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['modelo']->value) {
$_smarty_tpl->tpl_vars['modelo']->_loop = true;
$foreach_modelo_Sav = $_smarty_tpl->tpl_vars['modelo'];
?>
				<section>
					<div class="page-header cabecera-seccion">
						<h2><?php echo $_smarty_tpl->tpl_vars['modelo']->value['name_col'];?>
 <?php echo $_smarty_tpl->tpl_vars['modelo']->value['id_col'];?>
</h2>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['modelo']->value['publico']) {?>
					<?php
$_from = $_smarty_tpl->tpl_vars['modelo']->value['imagenes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['img'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['img']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
$foreach_img_Sav = $_smarty_tpl->tpl_vars['img'];
?>

<!--galerias-->                        <img src="./images/<?php echo $_smarty_tpl->tpl_vars['img']->value['img_mod'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['img']->value['id_mod'];?>
" >
					<?php
$_smarty_tpl->tpl_vars['img'] = $foreach_img_Sav;
}
?>
                			
                <?php }?>
            </section>
			<?php
$_smarty_tpl->tpl_vars['modelo'] = $foreach_modelo_Sav;
}
?>
			<?php } else { ?>
			no anda
		<?php }?>
	</section>
</article>
<?php }
}
?>