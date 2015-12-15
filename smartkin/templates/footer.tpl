<div class="col-md-12 bordes text-center black">
        <div class="col-md-3 text-center">
          <a data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">¿Quienes Somos?</a><br>
<a type="submit" data-toggle="modal" data-target="#myModal2">Consultar</a>        </div>
        <div class="col-md-6 text-center">
          Programación Web II || Florencia Beber || 2015
        </div>
        <div class="col-md-3 text-center">
            {foreach $informacion as $dato} 
              <span class="glyphicon glyphicon-phone" aria-hidden="true"> {$dato.email_info}</span><br>
               <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"> {$dato.tel_info}</span>
            {/foreach}
        </div>
        
    </div>
</div>      


<!-- Modal 2-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><h4 class="text-center"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Envíe su consulta...</h4></h4>
      </div>
      <div class="modal-body">
        {include file="contacto.tpl"}
      </div>
      
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
            <img src="./images/images-sys/smartkinlogo.png" width="60%;">

        </h4>
      </div>
      <div class="modal-body">
        {if !isset($usuario)}
      <form action="index.php?action=agregar_usuario" method="POST" enctype="multipart/form-data">
            <h4>Complete sus datos:</h4>
            <input type="text" class="form-control" id="new_email" name="new_email" placeholder="Correo Electrónico"> 
            <input type="text" class="form-control" id="new_name" name="new_name" placeholder="Nombre de Usuario"> 
            <input type="password" class="form-control" id="new_pass" name="new_pass" placeholder="Contraseña"> 
            
              
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Listo!</button>       
      </div>
      </form>

{/if}
    </div>
  </div>
</div>
    <!-- jQuery -->
    <script src="js/jquery-1.10.0.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="./js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./js/bootstrap.js"></script>

    <!-- Main -->
    <script src="./js/main.js"></script>
    <script src="./js/index.js"></script>
    

    
</body>

</html>

