{include file="header.tpl"}
	<img id="top" src="./img/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Agregar Portfolio</a></h1>
		<form id="formComments" class="appnitro"  method="post" action="">
			<ul >
				<li id="li_1" >
					<label class="description" for="element_1">Nombre Portfolio</label>
					<span>
						<input id="nombre_portfolio" name= "nombre_portfolio" class="element text" maxlength="20" size="20" value=""/>
					</span>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">Img portfolio</label>
					<span>
						<input type="file" id="imageFile" name="img_portfolio">
						<p class="help-block">Soporta: jpg, png</p>
						<button id="uploadImage" type="submit" class="btn btn-default">Guardar</button>
					</span>
				</li>
			</ul>
		</form>	
	</div>
		
{include file="footer.tpl"}