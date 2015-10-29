<?php /* Smarty version Smarty-3.1.14, created on 2015-10-21 14:15:43
         compiled from "./templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186441904756263bb1005019-06481236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb669023950c29719bac9ad0fab891ac18fb23f9' => 
    array (
      0 => './templates/admin.tpl',
      1 => 1445429742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186441904756263bb1005019-06481236',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56263bb100bac8_40750324',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56263bb100bac8_40750324')) {function content_56263bb100bac8_40750324($_smarty_tpl) {?><!--INICIO-->
    <div class="col-lm-12 text-center">  
        <h1>Panel de Control</h1>

        <ul class="nav nav-tabs tab_container">
            <li>
                <a data-toggle="tab" href="#tablaslides" id="tab_slides">Slides</a>
            </li>
                
            <li>
                <a data-toggle="tab" href="#tablaportfolios" id="tab_portfolios">Portfolios</a>
            </li>
            
            <li>
                <a data-toggle="tab" href="#tablacolecciones" id="tab_colecciones">Colecciones</a>
            </li>
            
            <li>
                <a data-toggle="tab" href="#tablausuarios" id="tab_usuarios">Usuarios</a>
            </li>
            
            <li>
               <a data-toggle="tab" href="#tablacomentarios" id="tab_comentarios">Comentarios</a>
            </li>

            <li>
               <a data-toggle="tab" href="#tablainformacion" id="tab_informacion">Información</a>
            </li>
                    
        </ul>
          
        <div class="row text-center">
            <div class="col-lm-12">
                <div class="tab-content">
                    <div class="tab-pane fade" id="tablausuarios"></div>
                    <div class="tab-pane fade" id="tablacategorias"></div>
                    <div class="tab-pane fade" id="tablamodelos"></div>
                    <div class="tab-pane fade" id="tablacolecciones"></div>     
                    <div class="tab-pane fade" id="tablaportfolios"></div>              
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_emergente">
        <div class="modal-dialog">
            <div class="modal-content" id="modal_body">
            </div>
        </div>
    </div>
<?php }} ?>