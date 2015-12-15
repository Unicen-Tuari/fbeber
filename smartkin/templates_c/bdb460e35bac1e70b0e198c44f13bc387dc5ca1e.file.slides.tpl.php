<?php /* Smarty version Smarty-3.1.14, created on 2015-12-11 22:19:21
         compiled from "./templates/slides.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121675921356544375ba8119-24477326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdb460e35bac1e70b0e198c44f13bc387dc5ca1e' => 
    array (
      0 => './templates/slides.tpl',
      1 => 1449868760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121675921356544375ba8119-24477326',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56544375bbe3c7_33464731',
  'variables' => 
  array (
    'slides' => 0,
    'imagen' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56544375bbe3c7_33464731')) {function content_56544375bbe3c7_33464731($_smarty_tpl) {?><br><br><div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0"></li>
        <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
          
            <li data-target="#carousel-example-generic" data-slide-to="0"></li>
          
        <?php } ?>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    <div class="item active">
      <img src="./images/images-sys/slide-default.jpg" alt="..." class="img-thumbnail" />
      <div class="carousel-caption">
      </div>
    </div>
  
    
  <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
          
    <div class="item">
      <img width="100%" src="./images/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_slide'];?>
" class="img-thumbnail" id="<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
"/>
      <div class="carousel-caption">
      </div>
    </div>    
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
</div></div><?php }} ?>