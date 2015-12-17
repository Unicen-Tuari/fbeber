<?php /* Smarty version 3.1.27, created on 2015-12-17 12:48:32
         compiled from "/opt/lampp/htdocs/Smartkin/templates/colecciones.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16300864075672a1105a09e4_96165772%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fdc3ffd54000fabc7f6658ddb5d9b082b3e83a9' => 
    array (
      0 => '/opt/lampp/htdocs/Smartkin/templates/colecciones.tpl',
      1 => 1450352909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16300864075672a1105a09e4_96165772',
  'variables' => 
  array (
    'colecciones' => 0,
    'modelo' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5672a11063d902_25869517',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5672a11063d902_25869517')) {
function content_5672a11063d902_25869517 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16300864075672a1105a09e4_96165772';
?>
<article>
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
						<h4><?php echo $_smarty_tpl->tpl_vars['modelo']->value['name_col'];?>
 <?php echo $_smarty_tpl->tpl_vars['modelo']->value['id_col'];?>
</h4>
					</div>
					
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

<!--galerias-->         <img src="./admin/<?php echo $_smarty_tpl->tpl_vars['img']->value['img_mod'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['img']->value['img_mod'];?>
" width="100px;" class="portfolio" >
					<?php
$_smarty_tpl->tpl_vars['img'] = $foreach_img_Sav;
}
?>             			
                
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