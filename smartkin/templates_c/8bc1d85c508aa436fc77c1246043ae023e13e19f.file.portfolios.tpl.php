<?php /* Smarty version Smarty-3.1.14, created on 2015-11-24 12:17:54
         compiled from "./templates/portfolios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213592898856544375c69a41-82832989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bc1d85c508aa436fc77c1246043ae023e13e19f' => 
    array (
      0 => './templates/portfolios.tpl',
      1 => 1448363859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213592898856544375c69a41-82832989',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56544375c8e0d8_16585660',
  'variables' => 
  array (
    'portfolios' => 0,
    'portfolio' => 0,
    'imagen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56544375c8e0d8_16585660')) {function content_56544375c8e0d8_16585660($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/smartkin.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="body-sm">

<div class="portfolios col-md-12 text-center">

      
<ul class="list-group">
  <?php  $_smarty_tpl->tpl_vars['portfolio'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['portfolio']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['portfolio']->key => $_smarty_tpl->tpl_vars['portfolio']->value){
$_smarty_tpl->tpl_vars['portfolio']->_loop = true;
?>
      <?php  $_smarty_tpl->tpl_vars['imagen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imagen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['portfolio']->value['imagenes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->key => $_smarty_tpl->tpl_vars['imagen']->value){
$_smarty_tpl->tpl_vars['imagen']->_loop = true;
?>
        <img src="./images/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_port'];?>
" class="lista" width="100px" id="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_img_port'];?>
" />
      <?php } ?>
  <?php } ?>
</ul>
</body>
</html>  <?php }} ?>