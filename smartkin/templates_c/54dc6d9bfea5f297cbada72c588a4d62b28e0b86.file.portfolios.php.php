<?php /* Smarty version Smarty-3.1.14, created on 2015-11-24 12:09:00
         compiled from "/opt/lampp/htdocs/smartkin/portfolios.php" */ ?>
<?php /*%%SmartyHeaderCode:14812831955654454c3a4ef2-40463530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54dc6d9bfea5f297cbada72c588a4d62b28e0b86' => 
    array (
      0 => '/opt/lampp/htdocs/smartkin/portfolios.php',
      1 => 1448363221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14812831955654454c3a4ef2-40463530',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5654454c3af945_81322970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5654454c3af945_81322970')) {function content_5654454c3af945_81322970($_smarty_tpl) {?><<?php ?>?php
  
include 'Controller/IndexController.php';
include_once 'config/config_app.php';

$model = new IndexModel();
$view = new IndexView();
$controller = new IndexController($model, $view);

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $controller = new IndexController();
  $controller->mostrarHomePortfolios();
}<?php }} ?>