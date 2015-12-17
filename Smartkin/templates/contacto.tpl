<article>
	<section>
		<div class="page-header cabecera-seccion">
		</div>
		<div class="contacto">
			<form id="form_contacto" class="form-horizontal" role="form">
				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
						<h4>Envianos tu consulta..</h4>
						<h6>* Campos Obligatorios</h6>
						<input class="form-control" type="text" maxlength="100" id="nombre" name="nombre" placeholder="* Nombre">
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
						<input class="form-control" type="email" maxlength="100" id="email" name="email" placeholder="* Direccion de E-Mail">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
						<textarea class="form-control" maxlength="1000" rows="8" id="consulta" name="consulta" placeholder="* Texto de la Consulta (Minimo 50 Caracteres)"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
						<button type="reset" class="btn btn-danger">Limpiar</button>
						<button type="submit" class="btn btn-success" id="enviarConsulta" >Enviar Consulta</button>
					</div>
				</div>
			</form>
		</div>
	</section>
</article>
<!--//// JS DE CONTACTO ////-->
	<script type="text/javascript" src="js/contacto.js"></script>