<?php /* Smarty version Smarty-3.1.14, created on 2014-11-26 05:24:38
         compiled from "./templates/admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131751415354754e450bfe67-44990337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb669023950c29719bac9ad0fab891ac18fb23f9' => 
    array (
      0 => './templates/admin.tpl',
      1 => 1416975873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131751415354754e450bfe67-44990337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54754e451522b9_28292158',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54754e451522b9_28292158')) {function content_54754e451522b9_28292158($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br>
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-12">
				<ul class="nav nav-tabs tab_container">
					<li>
						<a data-toggle="tab" href="#tablausuarios" id="tab_usuarios">
							<button type="button" class="btn btn-success">Usuarios</button>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#tablaportfolios" id="tab_portfolios">
							<button type="button" class="btn btn-primary">Portfolios</button>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#tablacategorias" id="tab_categorias">
							<button type="button" class="btn btn-danger">Categor&iacute;as</button>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#tablacolecciones" id="tab_colecciones">
							<button type="button" class="btn btn-info">Colecciones</button>
						</a>
					</li>
					<li>
						<a data-toggle="tab" href="#tablamodelos" id="tab_modelos">
							<button type="button" class="btn btn-warning">Modelos</button>
						</a>
					</li>
					
				</ul>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-lg-12">
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
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>