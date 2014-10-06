<?php /* Smarty version Smarty-3.1.19, created on 2014-09-28 21:22:50
         compiled from "consulta_categorias.php" */ ?>
<?php /*%%SmartyHeaderCode:17253255555428600aa4f795-64446419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8714a84f4ef744444cd38cfcdf89fcac28a2dab' => 
    array (
      0 => 'consulta_categorias.php',
      1 => 1411931883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17253255555428600aa4f795-64446419',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5428600aa56ee8_05988285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5428600aa56ee8_05988285')) {function content_5428600aa56ee8_05988285($_smarty_tpl) {?><<?php ?>?php
require('./libs/Smarty.class.php');


$smarty = new Smarty;

//Configuración
$host 	= "localhost";
$db	= "smartkin";
$user	= "root";
$pass	= "";

//Conexión
try{
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
}
catch(PDOException $pe)
{
	die('Error de conexion, Mensaje: ' -$pe->getMessage());
}

//Consulta
$sql = "SELECT * FROM smartkin.categoria";
$q	 = $conn->query($sql);

while($r = $q->fetch()){
	$nombre [] = $r ['nombre'];
	
}

$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("nombre", $nombre);

$smarty->display('index.tpl');
?<?php ?>>
<?php }} ?>
