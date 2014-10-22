{foreach $modelos as $dato}
    <button data-toggle="modal" data-target="#myModal" >
  <img src="./images/catalogo/{$dato.img_modelo}" width="100px">
</button>
    
{/foreach}


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
      </div>
      <div class="modal-body">
        {foreach $modelos as $dato}
  			<button data-toggle="modal" data-target="#myModal">
  				<img src="./images/catalogo/{$dato.img_dispositivo}" width="100px">
			</button>
		{/foreach}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>