<?php /* Smarty version Smarty-3.1.14, created on 2015-10-16 16:36:22
         compiled from "./templates/port.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70341641556210b6681a926-18128052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef0c371b49f8d66d5e99da0a015e8198a5d22a4c' => 
    array (
      0 => './templates/port.tpl',
      1 => 1445006146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70341641556210b6681a926-18128052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'port' => 0,
    'dato' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56210b66856025_34888902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56210b66856025_34888902')) {function content_56210b66856025_34888902($_smarty_tpl) {?><div class="featurette" id="portfolio">
            <h2 class="featurette-heading">Portfolio</h2>
            
                <div class="row">
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
                </div>
            <!--POPOVER PARA CONSULTAR PORTFOLIO-->    
                <div id="consulta_portfolio" style="display: none" >
                    <div class="container-fluid">
                        <div class="row">
                             <div class="col-md-12 text-center">
                    
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
                    </div>
                </div>

            </div><!--CIERRA PORTFOLIO-->
                    
        

        <hr class="featurette-divider"><?php }} ?>