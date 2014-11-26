{include file="header.tpl"}
	<img id="top" src="./img/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Agregar Coleccion</a></h1>
		<form id="formComments" class="appnitro"  method="post" action="">
			<ul >
				<li id="li_1" >
					<label class="description" for="element_1">id categoria</label>
					<span>
						<input id="id_categoria" name= "id_categoria" class="element text" maxlength="20" size="20" value=""/>
					</span>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">Nombre Coleccion</label>
					<span>
						<input id="nombre_coleccion" name= "nombre_coleccion" class="element text" maxlength="20" size="20" value=""/>
					</span>
				</li>
				<li id="li_1" >
					<label class="description" for="element_1">Img colecccion</label>
					<span>
						<input type="file" id="imageFile" name="img_coleccion">
						<p class="help-block">Soporta: jpg, png</p>
						<button id="uploadImage" type="submit" class="btn btn-default">Guardar</button>
					</span>
				</li>
			</ul>
		</form>	
{include file="footer.tpl"}