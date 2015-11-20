<?php /* Smarty version Smarty-3.1.14, created on 2015-11-19 20:10:56
         compiled from "./templates/slides.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8224671825640ac6e2e91b6-58506966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdb460e35bac1e70b0e198c44f13bc387dc5ca1e' => 
    array (
      0 => './templates/slides.tpl',
      1 => 1447959843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8224671825640ac6e2e91b6-58506966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5640ac6e2eb713_45032506',
  'variables' => 
  array (
    'slides' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640ac6e2eb713_45032506')) {function content_5640ac6e2eb713_45032506($_smarty_tpl) {?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0"></li>
    <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
    <li data-target="#carousel-example-generic" data-slide-to="0"></li>
    <?php } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['slide']->value['principal']){?>
    <div class="item active">
      <img width="100%" src="./images/<?php echo $_smarty_tpl->tpl_vars['slide']->value['path_slide'];?>
" alt="..." class="img-thumbnail "/>
      <div class="carousel-caption">
          <?php echo $_smarty_tpl->tpl_vars['slide']->value['path_slide'];?>

      </div>
    </div>
    <?php }else{ ?>
    

    <div class="item">
      <img width="100%" src="./images/<?php echo $_smarty_tpl->tpl_vars['slide']->value['path_slide'];?>
" class="img-thumbnail" id="<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_mod'];?>
"/>
      <div class="carousel-caption">
        <?php echo $_smarty_tpl->tpl_vars['slide']->value['path_slide'];?>

      </div>
    </div>    
    <?php }?>
  <?php } ?>


  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><?php }} ?>