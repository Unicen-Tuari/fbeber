{include file = "header.tpl"}
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
{include file = "footer.tpl"}