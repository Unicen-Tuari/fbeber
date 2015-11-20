
		<div class="col-md-12">
			<div class="col-md-6 text-center">
			{foreach $usuario as $user}
				<div class="text-center icon-user" style="background:url('./images/images_sys/{$user.img_user}') center;"><br><br>
					<h3 class="h3-user">{$user.name_user}</h3>
	        	</div>
	        {/foreach}
	        </div>
	         <div class="col-md-6 text-right">
	        	<br>
	        	<button id="logout" class="btn btn-primary">Salir</button>
	        </div>
	    </div>
	        	
			

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="head-conf-user">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#conf-user" aria-expanded="false" aria-controls="collapseTwo">
          Cuenta
        </a>
      </h4>
    </div>
    <div id="conf-user" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-conf-user">
      <div class="panel-body">
        {foreach $usuario as $user}
        	Nombre de Usuario: {$user.name_user}
   			
        	<input type="button" name="mostrar" value="M" onclick="mostrar('name_user')">
		
				<div id="name_user" style="display:none;"><br>
					<form action="index.php?action=modificar_name_user&id_user={$user['id_user']}" method="POST" enctype="multipart/form-data">
		            <input type="text" class="form-control" id="upd_name" name="upd_name" value="{$user.name_user}"> 
	            
			        <button type="submit" class="btn btn-default">Guardar</button>    
	    			</form>
				</div>

			<input type="button" name="mostrar" value="Pass" onclick="mostrar('pass_user')">
		
				<div id="pass_user" style="display:none;"><br>
					<form action="index.php?action=modificar_pass_user&id_user={$user['id_user']}" method="POST" enctype="multipart/form-data">
		            <input type="password" class="form-control" id="upd_pass" name="upd_pass" value="{$user.pass_user}"> 
	            
			        <button id="logout" type="submit" class="btn btn-default">Guardar</button>    
	    			</form>
				</div>

	        	
		{/foreach}
      </div>
    </div>
<!--Favorito<-->    
 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="head-fav-user">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#fav-user" aria-expanded="false" aria-controls="fav-user">
          Favoritos
        </a>
      </h4>
    </div>
    <div id="fav-user" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-fav-user">
      <div class="panel-body">
        {foreach $likes as $like}
	            <a class="" href="index.php?action=borrar_like&id_like={$like['id_fav']}">
	            	<img src="./images/{$like['img_mod']}" id="{$imagen['id_mod']}" class="img-thumbnail" width="80px;"/>No
	            </a>
			{/foreach}
      </div>
    </div>
<!--Comentarios-->  
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="head-com-user">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#com-user" aria-expanded="false" aria-controls="collapseTwo">
          Comentarios
        </a>
      </h4>
    </div>
    <div id="com-user" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head-com-user">
      <div class="panel-body">
        
	<table class="table table-bordered table-hover">
		<thead>
			<tr class="active">
				<th class="text-center">Fecha</th>
				<th class="text-center">Comentario</th>
				<th class="text-center">Borrar</th>
			</tr>
		</thead>
		<tbody>
			{foreach $comentariosUser as $comentario}
			
			<tr>
				<td>{$comentario.fecha_com}</td>
				<td>{$comentario.comentario}</td>
				<td><a class="" href="index.php?action=borrar_comentario&id_com={$comentario['id_com']}">Borrar</a></td>
			</tr>
			{/foreach}
		</tbody>
	</table>
    </div>
    </div>
    
</div></div></div></div>
	
		
	