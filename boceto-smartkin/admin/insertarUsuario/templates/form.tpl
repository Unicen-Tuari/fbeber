{include file="header.tpl"}
	<img id="top" src="./img/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Agregar Categoria</a></h1>
		<form id="formComments" class="appnitro"  method="post" action="">
			<ul >
				<li id="li_1" >
					<label class="description" for="element_1">Nombre Categoria</label>
					<span>
						<input id="name_user" name= "name_user" class="element text" maxlength="20" size="20" value=""/>
						<input id="pass_user" name= "pass_user" class="element text" maxlength="20" size="20" value=""/>
						<input id="email" name= "email" class="element text" maxlength="20" size="20" value=""/>
					</span>
				</li>

				<li class="buttons">
					<input id="saveForm" class="button_text" type="submit" name="saveForm" value="Agregar" />
				</li>
			</ul>
		</form>	
{include file="footer.tpl"}