		<div class="col-md-12">
			<div class="col-md-6 text-center">
			{foreach $admin as $user}
				<div class="text-center icon-user" style="background:url('{$user.img_admin}'); background-size:100%;"><br><br>
					<h4 class="h3-user">{$user.name_user}</h4>
	        	</div>
	        {/foreach}
	        </div>
	        <div class="col-md-6 text-right">
	        	<br>
	        	<button id="logout" class="glyphicon glyphicon-off btn btn-danger"></button>
	        </div>
	    </div>	


<div class="panel-group text-left" id="accordion" role="tablist" aria-multiselectable="true">
 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="head-conf-user">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#conf-user" aria-expanded="false" aria-controls="collapseTwo">
          <span class="glyphicon glyphicon-user" aria-hidden="true"> Cuenta</span>
        </a>
      </h4>
    </div>
    <div id="conf-user" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-conf-user">
      <div class="panel-body">
        {foreach $admin as $user}
          
        	Nombre de Usuario: {$user.name_admin}	
   			<button name="mostrar" onclick="mostrar('name_admin')" type="button" class="btn btn-default" aria-label="Left Align">
  				<span class="glyphicon glyphicon-pencil" aria-hidden="true">
				</span>
			</button>        	
		
				<div id="name_user" style="display:none;"><br>
					<form action="index.php?action=modificar_name_admin&id_user={$user['id_user']}" method="POST" enctype="multipart/form-data">
		            <input type="text" class="form-control" id="upd_name" name="upd_name" value="{$user.name_user}"> 
	            
			        <button type="submit" class="btn btn-success glyphicon glyphicon-ok">Guardar</button>    
	    			</form>
				</div>
			<div class="col-md-10">
        		<form action="index.php?action=agregar_img_admin&id_admin={$user['id_admin']}" method="POST" enctype="multipart/form-data">
            	    <input type="file" name="imagesToUpload[]" id="imagesToUpload"/>
              		<button type="submit" class="btn btn-default">Listo!</button>         
          		</form>
          	</div>
				<button name="mostrar" onclick="mostrar('pass_admin')" type="button" class="btn btn-default" aria-label="Left Align" onclick="mostrar('pass_admin')">
  				<span class="glyphicon glyphicon-pencil" aria-hidden="true">
				</span>Contraseña
			</button> 
				<div id="pass_user" style="display:none;" class="col-md-12 text-center"><br>
					<form action="index.php?action=modificar_pass_admin&id_admin={$user['id_admin']}" method="POST" enctype="multipart/form-data">
					<div class="col-md-8">
		            <input type="password" class="form-control" id="upd_pass" name="upd_pass" value=""> 
	            	</div>
	            	<div class="col-md-1">
			        <button id="logout" type="submit" class="btn btn-success">Guardar</button>    
			        </div>
	    			</form>
				</div>        	
			{/foreach}
      	</div>
    </div>


	
		
	