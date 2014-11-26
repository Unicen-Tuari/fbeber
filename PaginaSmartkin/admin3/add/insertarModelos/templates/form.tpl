{include file="header.tpl"}
	<img id="top" src="./img/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Agregar Modelo</a></h1>
		<form id="formComments" class="appnitro"  method="post" action="">
			<ul >
				<li id="li_1" >
					<label class="description" for="element_1">id coleccion</label>
					<span>
						<input id="id_coleccion" name= "id_coleccion" class="element text" maxlength="20" size="20" value=""/>
					</span>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">Nombre Modelo</label>
					<span>
						<input id="nombre_modelo" name= "nombre_modelo" class="element text" maxlength="20" size="20" value=""/>
					</span>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">Img modelo</label>
					<span>
						<input type="file" id="imageFile" name="img_modelo">
						<p class="help-block">Soporta: jpg, png</p>
						<button id="uploadImage" type="submit" class="btn btn-default">Guardar</button>
					</span>
				</li>
			</ul>
		</form>	
		
{include file="footer.tpl"}