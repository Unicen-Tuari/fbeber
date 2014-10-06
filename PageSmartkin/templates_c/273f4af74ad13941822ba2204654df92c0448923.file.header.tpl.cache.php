<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 14:19:09
         compiled from "./templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13106929505425cfd0243f59-11627310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '273f4af74ad13941822ba2204654df92c0448923' => 
    array (
      0 => './templates/header.tpl',
      1 => 1412164555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13106929505425cfd0243f59-11627310',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5425cfd0353c44_46574031',
  'variables' => 
  array (
    'nombre_categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5425cfd0353c44_46574031')) {function content_5425cfd0353c44_46574031($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smartkin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/elastislide.css" />
    
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['name'] = 'lnombres';
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nombre_categoria']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['lnombres']['total']);
?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['nombre_categoria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>
.php">
                                        <?php echo $_smarty_tpl->tpl_vars['nombre_categoria']->value[$_smarty_tpl->getVariable('smarty')->value['section']['lnombres']['index']];?>

                                    </a>
                                <?php endfor; endif; ?>
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
