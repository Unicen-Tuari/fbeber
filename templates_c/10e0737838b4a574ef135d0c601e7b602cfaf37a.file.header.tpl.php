<?php /* Smarty version Smarty-3.1.14, created on 2016-11-24 19:20:12
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:575058358a670f7a95-56119791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1480011603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '575058358a670f7a95-56119791',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58358a6716cdb2_48485246',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58358a6716cdb2_48485246')) {function content_58358a6716cdb2_48485246($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/icono2.png"/> 
    <title>Gimnasio | Sitio Oficial</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

  </head>
  <body  class="text-center">
    <div class="col-md-1 icono">
      <img src="images/icono2.png" width="120px;">
    </div>

     <nav class="navbar navbar-default navegador">
      <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a id="home" href="#"><b>Inicio</b></a></li>
            <li><a id="actividades" href="#"><b>Actividades</b></a></li>
            <li><a id="nosotros" href="#"><b>Nosotros</b></a></li>
            <li><a id="contacto" href="#"><b>Contacto</b></a></li>
            <li><a id="opiniones" href="#"><b>Opiniones</b></a></li>
            <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)){?><li><a id="cuenta" href="#"><b>Mi Sesión</b></a></li><?php }?>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    
<?php }} ?>