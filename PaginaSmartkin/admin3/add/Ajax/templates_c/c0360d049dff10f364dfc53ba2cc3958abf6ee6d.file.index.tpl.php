<?php /* Smarty version Smarty-3.1.14, created on 2014-11-25 17:25:03
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11075659705474aa9a8aea06-19338702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1416932699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11075659705474aa9a8aea06-19338702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5474aa9a94f817_62449802',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5474aa9a94f817_62449802')) {function content_5474aa9a94f817_62449802($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejemplo Ajax</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<script type="text/javascript" src = "./js/main.js"> </script>
  </head>

  <body>
    <div class="container">
      <div class="page-header">
      <h1><a>Agregar Coleccion</a></h1>
    <form id="formComments" class="appnitro"  method="post" action="">
      <ul >
        <li id="li_1" >
          <label class="description" for="element_1">Categoria</label>
          
            <span>
            <input id="id_categoria" name= "id_categoria" class="element text" maxlength="20" size="20" value=""/>
          </span>
        </li>
        <li id="li_1" >
          <label class="description" for="element_1">Nombre Coleccion</label>
          <span>
            <input id="nombre_categoria" name= "nombre_categoria" class="element text" maxlength="20" size="20" value=""/>
          </span>
        </li>

        <li class="buttons">
          <input id="saveForm" class="button_text" type="submit" name="saveForm" value="Agregar" />
        </li>
      </ul>
    </form>   
    </div>
  </body>
</html>
<?php }} ?>