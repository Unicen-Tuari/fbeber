<p>Por defecto los Nuevo Portfolios no se publicarán. Para poder visualizarlas en la sección "Portfolios" en el sitio web, haga click en el botón "Publicar".</p>

<form action="index.php?action=agregar_portfolio" method="POST" enctype="multipart/form-data">
<div class="bordes col-md-12">
<h2>Nueva Portfolio</h2>
<div class="bordes col-md-2"></div>
<div class="bordes col-md-3">
      <h3>Paso 1</h3>
      <input type="text" class="form-control" id="port" name="port" placeholder="Nombre del nuevo portfolio"> 
</div>
<div class="bordes col-md-3">
      <h3>Paso 2</h3>
      <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
</div>
<div class="bordes col-md-2">
    <h3>Paso 3</h3>
    <button type="submit" class="btn btn-default">Listo!</button>       
</div>
<div class="bordes col-md-2"></div>
</div>
        
</form>
<div class="bordes col-md-12">
<h2>Listado de colecciones</h2>
<table class="table table-bordered table-hover">
    <thead>
      <tr class="active">
        <th class="text-center">Nombre</th>
        <th class="text-center">Descripcion</th>
        <th class="text-center">Borrar</th>
        <th class="text-center">Portfolios</th>
      </tr>
    </thead>
      
      <tbody>
        
      {foreach $portfolios as $portfolio}  
      <tr>
          <td>{$portfolio.name_port}</td>
          <td>{$portfolio.descrip_port}</td>
          <td><a class="glyphicon glyphicon-trash" href="index.php?action=borrar_portfolio&id_port={$portfolio['id_port']}"></a></td>
          
        <td class="text-left">
        <button type="submit" class="btn btn-default"> <a class="botonAgregarImagenes" href="index.php?action=agregar_img_portfolio&id_port={$portfolio['id_port']}">Agregar<br>Portfolios</button></a>
        {foreach $portfolios['imagenes'] as $imagen}
                  
                  <img src="{$imagen['path_mod']}" alt="{$imagen['id_img_port']}-{$portfolio['id_img_port']}" class="img-thumbnail" width="100px" id="{$imagen['id_img_port']}" />
                  <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_img_portfolio&id_img_port={$imagen['id_img_port']}"></a>

                {/foreach}
        </td>
    </tr>{/foreach}
  </tbody>
</table>
                 
   </div>               
                  
                  
                  


  