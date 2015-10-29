<?php /* Smarty version Smarty-3.1.14, created on 2015-02-17 16:03:35
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:73154e358473fe2b7-99548988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1422419084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73154e358473fe2b7-99548988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoria' => 0,
    'nombre' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54e35847447243_26019771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e35847447243_26019771')) {function content_54e35847447243_26019771($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Smartkin</title>
     <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/one-page-wonder.css" rel="stylesheet">

    <link rel="icon" type="image/jpg" href="./images/fb.jpg"/>
</head>

<body onload="ocultar();">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <a class="navbar-brand" href="#inicio">
                    <img src="./images/smartkinlogo.png" width="35%">
                </a> 
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#inicio">Inicio</a>
                    </li>
                    <li class="dropdown">
                        <a id="dLabel"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Galerías
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                       <?php  $_smarty_tpl->tpl_vars['nombre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nombre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categoria']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nombre']->key => $_smarty_tpl->tpl_vars['nombre']->value){
$_smarty_tpl->tpl_vars['nombre']->_loop = true;
?>
                            <li>
                                <a href="#galerias" onClick = "getColeccion(<?php echo $_smarty_tpl->tpl_vars['nombre']->value['id_cat'];?>
);"><?php echo $_smarty_tpl->tpl_vars['nombre']->value['id_cat'];?>
</a>
                            </li>
                        <?php } ?>
                        </ul>
                    </li>
                    <li>
                    </li>
                    <li class="dropdown">
                        <a href="#app" style="color:violet">Haz tu propio diseño!!</a>
                    </li>
                    <li class="dropdown">
                        <a href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a href="#services">Otros trabajos</a>
                    </li>
                 
                    <li>
                        <a href="#contacto">Contacto</a>
                    </li>
                    <li>
                        <div id="popover-content" style="display: none" >
                            <div class="container-fluid">
                            <div class="row">
                                <label id="sample">                                    
                                    <p class="lead text-center">
                                    <a href="#" data-toggle="modal" data-target="#loguearse">Ingresar</a>
                                        <img src="./images/anonimo.jpg" class="icono_user"> 
                                        Nombre
                                    </p>   
                                    <div class="form-group text-center">
                                    <button type="button" class="btn btn-default btn-sm">
                                      <span class="glyphicon glyphicon-picture" aria-hidden="true"></span> 
                                      Mi sesión
                                    </button>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="button" class="btn btn-danger">Salir</button>
                                    </div>
                                </div> 
                            </div>
                        </div>

                    <a href="#nada" rel="popover" data-content='' data-placement="">Mi sesión</a>
                 </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    
<?php }} ?>