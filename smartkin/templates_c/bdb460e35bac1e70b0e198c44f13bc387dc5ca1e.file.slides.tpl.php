<?php /* Smarty version Smarty-3.1.14, created on 2015-11-22 12:10:29
         compiled from "./templates/slides.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8224671825640ac6e2e91b6-58506966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdb460e35bac1e70b0e198c44f13bc387dc5ca1e' => 
    array (
      0 => './templates/slides.tpl',
      1 => 1448190530,
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
    'slide' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640ac6e2eb713_45032506')) {function content_5640ac6e2eb713_45032506($_smarty_tpl) {?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0"></li>
    
    <li data-target="#carousel-example-generic" data-slide-to="0"></li>
    <li data-target="#carousel-example-generic" data-slide-to="0"></li>
    <li data-target="#carousel-example-generic" data-slide-to="0"></li>


    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    <div class="item active">
      <img width="100%" src="./images/images_sys/slides/1.jpg" alt="..." class="img-thumbnail "/>
      <div class="carousel-caption">
      </div>
    </div>
  
    

    <div class="item">
      <img width="100%" src="./images/images_sys/slides/2.jpg" class="img-thumbnail" id="<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_mod'];?>
"/>
      <div class="carousel-caption">
      </div>
    </div>    
  
  <div class="item">
      <img width="100%" src="./images/images_sys/slides/3.jpg" class="img-thumbnail" id="<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_mod'];?>
"/>
      <div class="carousel-caption">
      </div>
    </div>    
  
  <div class="item">
      <img width="100%" src="./images/images_sys/slides/4.jpg" class="img-thumbnail" id="<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_mod'];?>
"/>
      <div class="carousel-caption">
      </div>
    </div>    
  


  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div></div><?php }} ?>