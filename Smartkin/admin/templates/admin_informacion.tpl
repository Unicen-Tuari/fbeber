{include file="header.tpl"}
			
{if isset($informacion)}

<h2>Información</h2>

<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModalInfo">Agregar Info</button>

	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th>Borrar</th>
				<th class="text-center">Datos</th>
				<th>Guardar Cambios</th>
			</tr>
		</thead>
		{foreach $informacion as $info}
		<tbody>
			<tr>
			<form action="admin_info.php?action=modificar_info&id_info={$info['id_info']}" method="POST" enctype="multipart/form-data">
		             
			        
				<td><a class="glyphicon glyphicon-trash" href="admin_info.php?action=borrar_info&id_info={$info['id_info']}"></a></td>
				<td>
				<input type="text" class="form-control" id="upd_dir" name="upd_dir" value="{$info.dir_info}">
				
				<input type="text" class="form-control" id="upd_email" name="upd_email" value="{$info.email_info}"> 
				
				<input type="text" class="form-control" id="upd_tel" name="upd_tel" value="{$info.tel_info}"> 
				
				<input type="text" class="form-control" id="upd_wh" name="upd_wh" value="{$info.wh_info}"> 
				
				<input type="text" class="form-control" id="upd_fb" name="upd_fb" value="{$info.fb_info}"> 	
				
				<input type="text" class="form-control" id="upd_tw" name="upd_tw" value="{$info.tw_info}"> 
				
				<input type="text" class="form-control" id="upd_g" name="upd_g" value="{$info.g_info}"> 
			
				<input type="text" class="form-control" id="upd_mercado" name="upd_mercado" value="{$info.mercado_info}"> 
			
				<input type="text" class="form-control" id="upd_olx" name="upd_olx" value="{$info.olx_info}"> 

				</td>
				
				<td><button type="submit" class="btn btn-success">Guardar cambios</button></td>    
	    			</form>
			</tr>
		</tbody>
			{/foreach}

	</table>



<!-- Modal -->
<div class="modal fade" id="myModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <form action="admin_info.php?action=agregar_info" method="POST" enctype="multipart/form-data">
      
            <input type="text" class="form-control" id="new_email" name="new_email" placeholder="Correo Electrónico"> 
            <input type="text" class="form-control" id="new_tel" name="new_tel" placeholder="Telefono"> 
            <input type="text" class="form-control" id="new_wh" name="new_wh" placeholder="Whatsapp"> 
            <input type="text" class="form-control" id="new_dir" name="new_dir" placeholder="Direccion"> 
            <input type="text" class="form-control" id="new_fb" name="new_fb" placeholder="Facebook"> 
            <input type="text" class="form-control" id="new_tw" name="new_tw" placeholder="Twitter"> 
            <input type="text" class="form-control" id="new_instagram" name="new_instagram" placeholder="Instagram"> 
            <input type="text" class="form-control" id="new_mercado" name="new_mercado" placeholder="Mercado Libre"> 
            
              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
            </form>

    </div>
  </div>
</div></div>
{/if}
{include file="footer.tpl"}