<?php /* Smarty version Smarty-3.1.14, created on 2014-10-06 15:47:11
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:361201664543293081bec74-47440445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97c13ae6868bbc459509c9f1b968154acd23eecc' => 
    array (
      0 => './templates/header.tpl',
      1 => 1412603229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '361201664543293081bec74-47440445',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543293081e5e72_11796425',
  'variables' => 
  array (
    'categoria' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543293081e5e72_11796425')) {function content_543293081e5e72_11796425($_smarty_tpl) {?><!DOCTYPE html>
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
                            <li>
                                <?php  $_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['datos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->key => $_smarty_tpl->tpl_vars['datos']->value){
$_smarty_tpl->tpl_vars['datos']->_loop = true;
?>
                                    <a href="colecciones.php">
                                        <?php echo $_smarty_tpl->tpl_vars['datos']->value['id_categoria'];?>
,<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre_categoria'];?>

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
        </div>
    </nav>

<?php }} ?>