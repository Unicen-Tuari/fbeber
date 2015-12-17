<?php /* Smarty version 3.1.27, created on 2015-12-17 03:48:15
         compiled from "/opt/lampp/htdocs/lruggiero-master/templates/inicio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10654583115672226f1b7a42_11167888%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3ecc4d4df53803924c13a66586c09fbf748c88c' => 
    array (
      0 => '/opt/lampp/htdocs/lruggiero-master/templates/inicio.tpl',
      1 => 1450320494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10654583115672226f1b7a42_11167888',
  'variables' => 
  array (
    'slides' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5672226f23b883_62292850',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5672226f23b883_62292850')) {
function content_5672226f23b883_62292850 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10654583115672226f1b7a42_11167888';
?>
<article>
		
			
				<section>
					<div class="page-header cabecera-seccion">
						<?php
$_from = $_smarty_tpl->tpl_vars['slides']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['slide']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
$foreach_slide_Sav = $_smarty_tpl->tpl_vars['slide'];
?>			
							<img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['img_slide'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_img_slide'];?>
">
						<?php
$_smarty_tpl->tpl_vars['slide'] = $foreach_slide_Sav;
}
?>				
					
					</div>
					
				</section>
			

</article>
<?php }
}
?>