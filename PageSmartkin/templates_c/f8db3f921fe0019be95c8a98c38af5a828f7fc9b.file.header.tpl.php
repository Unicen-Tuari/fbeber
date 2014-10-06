<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 22:31:18
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2027521694542c5b9a5d5ea3-76505943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8db3f921fe0019be95c8a98c38af5a828f7fc9b' => 
    array (
      0 => './templates/header.tpl',
      1 => 1412193915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2027521694542c5b9a5d5ea3-76505943',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542c5b9a6acb34_99868294',
  'variables' => 
  array (
    'nombre_categoria' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542c5b9a6acb34_99868294')) {function content_542c5b9a6acb34_99868294($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smartkin</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/elastislide.css" />
    <link rel="stylesheet" type="text/css" href="css/modern-business.css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Smartkin</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categor&iacute;as<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nombre_categoria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value) {
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?>
                                    <a href="colecciones.php">
                                        <?php echo $_smarty_tpl->tpl_vars['nombre_categoria']->value[$_smarty_tpl->tpl_vars['nombre']->value];?>

                                    </a>
                                <?php } ?>
                            </li> 
                        </ul>
                    </li>

                    <li>
                        <a href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php }} ?>
