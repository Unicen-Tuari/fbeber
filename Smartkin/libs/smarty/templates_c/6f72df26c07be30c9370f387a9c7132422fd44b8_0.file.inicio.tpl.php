<?php /* Smarty version 3.1.27, created on 2015-12-17 13:28:15
         compiled from "/opt/lampp/htdocs/Smartkin/templates/inicio.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14479959885672aa5fd306e1_11777281%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f72df26c07be30c9370f387a9c7132422fd44b8' => 
    array (
      0 => '/opt/lampp/htdocs/Smartkin/templates/inicio.tpl',
      1 => 1450355158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14479959885672aa5fd306e1_11777281',
  'variables' => 
  array (
    'slides' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5672aa5fdb5d03_52168178',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5672aa5fdb5d03_52168178')) {
function content_5672aa5fdb5d03_52168178 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14479959885672aa5fd306e1_11777281';
?>
<article>
		
			
				<section>
					<div class="page-header cabecera-seccion">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0"></li>
        <?php
$_from = $_smarty_tpl->tpl_vars['slides']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['imagen']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
$foreach_imagen_Sav = $_smarty_tpl->tpl_vars['imagen'];
?>
          
            <li data-target="#carouse  l-example-generic" data-slide-to="0"></li>
          
        <?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    <div class="item active">
      <img  width="100%" src="./imagenes/images-sys/1.jpg" alt="..." class="img-thumbnail" />
      <div class="carousel-caption">
      </div>
    </div>
  
    
  <?php
$_from = $_smarty_tpl->tpl_vars['slides']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['imagen']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
$foreach_imagen_Sav = $_smarty_tpl->tpl_vars['imagen'];
?>
          
    <div class="item">
      <img width="100%" src="./admin/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_slide'];?>
" class="img-thumbnail" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_slide'];?>
"/>
      <div class="carousel-caption">
      </div>
    </div>    
<?php
$_smarty_tpl->tpl_vars['imagen'] = $foreach_imagen_Sav;
}
?>
  

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div>
					
					
				</section>
			

</article>
<?php }
}
?>