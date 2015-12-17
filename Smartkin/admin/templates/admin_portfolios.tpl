{include file="header.tpl"}
<!-- Button trigger modal -->
{if isset($portfolios)}

<h2>Listado de Portfolios</h2>
<table class="table table-bordered table-hover">

    <thead>
      <tr class="active">
        <th class="text-center">Nombre</th>
        <th class="text-center">Portfolios</th>
      </tr>
    </thead>
      {foreach $portfolios as $portfolio}  

      <tbody>
        
      <tr>
          <td>
          {$portfolio.name_port}
          
        <td class="text-left">
        
        <!--agregar modelos-->
        <div class="col-md-12">

          <form action="admin_portfolios.php?action=agregar_img_port&id_port={$portfolio['id_port']}" method="POST" enctype="multipart/form-data">
          <div class="col-md-7">
            <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
          </div>
          <div class="col-md-5">        
              <button type="submit" class="">agregar portfolios</button>       
          </div>
        </form>
        </div>

                  
          
        {foreach $portfolio['imagenes'] as $imagen}
        <br>
                <div class="col-md-4">
                  <img src="{$imagen.img_port}" alt="{$imagen['id_img_port']}-{$portfolio['id_port']}" class="img-thumbnail" width="50px" id="{$imagen.id_img_port}" />
                  <a class="glyphicon glyphicon-trash" href="admin_portfolios.php?action=borrar_img_portfolio&id_img_port={$imagen.id_img_port}"></a>
                </div>
                <div class="col-md-8">
                  <form action="admin_portfolios.php?action=modificar_img_port&id_img_port={$imagen['id_img_port']}" method="POST" enctype="multipart/form-data">
      
                   <input type="text" class="form-control" id="upd_descrip" name="upd_descrip" value="{$imagen.descripcion}" placeholder="Descripcion">
                   <button type="submit" class="btn btn-success glyphicon glyphicon-ok"></button>
                  </form>
                </div>
                  

                {/foreach}
        </td>
    </tr>
  </tbody>
         {/foreach}

</table>
                 


<!-- Modal -->
<div class="modal fade" id="myModalPort" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo Portfolio</h4>
      </div>
      <div class="modal-body">
        <form action="admin_portfolios.php?action=agregar_portfolio" method="POST" enctype="multipart/form-data">
      <input type="text" class="form-control" id="port" name="port" placeholder="Nombre del nuevo portfolio"> 
      <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-default">Listo!</button>       
      </div>
      </form>
    </div>
  </div>
</div>
{/if}
{include file="footer.tpl"}           
                  
                  


  