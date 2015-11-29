{include file="header.tpl"}
<br>
<br>
<p class="text-center">Esta información se publicará en la sección "Contacto" del sitio web Smartkin.<br>

Para modificar, borrar o agregar información solo haz click en el icono correspondiente</p>
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th>Borrar</th>
				<th class="text-center">Dirección</th>
				<th class="text-center">Correo Electrónico</th>
				<th class="text-center">Telefono</th>
				<th class="text-center">Whatsapp</th>
				<th class="text-center">Facebook</th>
				<th class="text-center">Twitter</th>
				<th class="text-center">Google Plus</th>
				<th class="text-center">Mercado Libre</th>
				<th class="text-center">olx</th>
				<th>guardar</th>
			</tr>
		</thead>
		<tbody>
			{foreach $informacion as $info}
			<tr>
			<form action="admin_info.php?action=modificar_info&id_info={$info['id_info']}" method="POST" enctype="multipart/form-data">
		             
			        
				<td><a class="glyphicon glyphicon-trash" href="admin_info.php?action=borrar_info&id_info={$info['id_info']}"></a></td>
				<td>{$info.dir_info}
				<input type="text" class="form-control" id="upd_dir" name="upd_dir" value="{$info.dir_info}"></td>
				<td>{$info.email_info}
				<input type="text" class="form-control" id="upd_email" name="upd_email" value="{$info.email_info}"> </td>	
				<td>{$info.tel_info}
				<input type="text" class="form-control" id="upd_tel" name="upd_tel" value="{$info.tel_info}"> </td>	
				<td>{$info.wh_info}
				<input type="text" class="form-control" id="upd_wh" name="upd_wh" value="{$info.wh_info}"> </td>	
				<td>{$info.fb_info}
				<input type="text" class="form-control" id="upd_fb" name="upd_fb" value="{$info.fb_info}"> </td>	
				<td>{$info.tw_info}
				<input type="text" class="form-control" id="upd_tw" name="upd_tw" value="{$info.tw_info}"> </td>	
				<td>{$info.g_info}
				<input type="text" class="form-control" id="upd_g" name="upd_g" value="{$info.g_info}"> </td>
				<td>{$info.mercado_info}
				<input type="text" class="form-control" id="upd_mercado" name="upd_mercado" value="{$info.mercado_info}"> </td>
				<td>{$info.olx_info}
				<input type="text" class="form-control" id="upd_olx" name="upd_olx" value="{$info.olx_info}"> </td>
				<td><button type="submit" class="btn btn-success glyphicon glyphicon-ok">Guardar</button></td>    
	    			</form>
			</tr>
			{/foreach}
		</tbody>
	</table>

<h2>agregar info</h2>
 <form action="admin_info.php?action=agregar_info" method="POST" enctype="multipart/form-data">
      
            <input type="text" class="form-control" id="new_email" name="new_email" placeholder="Correo Electrónico"> 
            <input type="text" class="form-control" id="new_tel" name="new_tel" placeholder="Telefono"> 
            <input type="text" class="form-control" id="new_wh" name="new_wh" placeholder="Whatsapp"> 
            <input type="text" class="form-control" id="new_dir" name="new_dir" placeholder="Direccion"> 
            <input type="text" class="form-control" id="new_fb" name="new_fb" placeholder="Facebook"> 
            <input type="text" class="form-control" id="new_tw" name="new_tw" placeholder="Twitter"> 
            <input type="text" class="form-control" id="new_g" name="new_g" placeholder="Google Plus"> 
            <input type="text" class="form-control" id="new_mercado" name="new_mercado" placeholder="Mercado Libre"> 
            <input type="text" class="form-control" id="new_olx" name="new_olx" placeholder="Olx"> 
            
          <button type="submit" class="btn btn-default">Listo!</button>       
              
      </form>

{include file="footer.tpl"}