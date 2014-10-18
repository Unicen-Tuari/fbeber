<?php /* Smarty version Smarty-3.1.14, created on 2014-10-17 15:04:16
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3233084795440b457c159e5-46481149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1413551049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3233084795440b457c159e5-46481149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5440b457c57b78_15874230',
  'variables' => 
  array (
    'categorias' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5440b457c57b78_15874230')) {function content_5440b457c57b78_15874230($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smartkin</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/modern-business.css">
    <script type="text/javascript" src = "./js/main.js"> </script>
    <script src="js/jquery-1.11.0.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body>

    <!-- Nav -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
    
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Smartkin</a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categor&iacute;as<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                                                           
                            <?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value){
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?>
                                <li>
                                    <button onClick = "getDataColecciones(<?php echo $_smarty_tpl->tpl_vars['nombre']->value['id_categoria'];?>
);"><?php echo $_smarty_tpl->tpl_vars['nombre']->value['nombre_categoria'];?>
</buttom>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>

                    <li>
                        <a href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php echo $_smarty_tpl->getSubTemplate ("lateral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>