<?php /* Smarty version Smarty-3.1.14, created on 2014-10-22 01:21:46
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17758733295446ea8a61f1c2-12705733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1413933496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17758733295446ea8a61f1c2-12705733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categorias' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5446ea8a67bb80_97348840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5446ea8a67bb80_97348840')) {function content_5446ea8a67bb80_97348840($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="">

	    <title>Smartkin</title>

	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
  	</head>

  	<body>

	    <div class="container">
	      <div class="header">
	        <div class="navbar-header">
              <nav class="navbar navbar-inverse" role="navigation">
                <div class="container">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#">Smartkin</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Men&uacute;</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    
                  </div>
                
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                          <li><a href="./index.php">Home</a></li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categor&iacute;as <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                              <?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value){
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?>
                                  <li>
                                      <a onClick = "getDataColecciones(<?php echo $_smarty_tpl->tpl_vars['nombre']->value['id_categoria'];?>
);"><?php echo $_smarty_tpl->tpl_vars['nombre']->value['nombre_categoria'];?>
</a>
                                  </li>
                              <?php } ?>
                            </ul>
                          </li>
                          <li><a href="contacto.html">Contacto</a></li>
                      </ul>
                  </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav><?php }} ?>