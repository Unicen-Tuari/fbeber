<?php /* Smarty version Smarty-3.1.14, created on 2015-10-20 18:28:19
         compiled from "./templates/portfolio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186893461656210f1873ce38-32151160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66be3f05849dcad25f53f2720701b6386b99b74d' => 
    array (
      0 => './templates/portfolio.tpl',
      1 => 1445358479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186893461656210f1873ce38-32151160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56210f1876df20_52768908',
  'variables' => 
  array (
    'port' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56210f1876df20_52768908')) {function content_56210f1876df20_52768908($_smarty_tpl) {?>
<div id="portfolios">                  
    <h1>Portfolios</h1>
    <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['port']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?> 
        <div class="col-sm-6 col-md-4" id="port">
            <div class="thumbnail">
                <img src="images/<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_port'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['dato']->value['img_port'];?>
">
            <div class="caption">
                <h4><?php echo $_smarty_tpl->tpl_vars['dato']->value['name_port'];?>
</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['dato']->value['descrip_port'];?>
</p>                
                <a href="#nada" rel="consulta_portfolio" data-content='' data-placement="">
                    <button type="button" class="btn btn btn-default btn-sm" >Consultar</button>
                </a>
                <div class="text-right">
                    <button type="button" class="btn btn-default btn-sm"> 
                        25
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                    Like
                    </button>
                </div>
            </div>
        </div>
</div>
<?php } ?>
   
<!--POPOVER PARA CONSULTAR PORTFOLIO-->    
    <div id="consulta_portfolio" style="display: none" >
        <div class="col-md-8 text-center">
                    
            <div class="form-group has-success">
                <?php  $_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dato']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['port']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->key => $_smarty_tpl->tpl_vars['dato']->value){
$_smarty_tpl->tpl_vars['dato']->_loop = true;
?> 
                    <h4>Consulta por:<?php echo $_smarty_tpl->tpl_vars['dato']->value['name_port'];?>
</h4>
                <?php } ?> 
            </div>
            
            <div class="form-group has-success">
                <textarea name="comment" form="usrform" class="form-control" placeholder="Detalles de la consulta"></textarea>
            </div>

            <div class="text-center">
                <button type="button" class="btn btn-default btn-md te">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar
                </button>
                <br>
            </div>
        </div>
    </div> 
</div><?php }} ?>