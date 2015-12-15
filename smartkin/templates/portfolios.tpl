{include file="header.tpl"}
        <div class="col-md-12 fondoplaca"> <!--galeria-->

      <div class="col-md-2"></div>
      <div class="col-md-8 placa">
<h3>Smartkin anda vistiendo</h3> 
        {foreach $portfolios as $imagen}
            <div class="text-center port" >
              <img src="./images/{$imagen['img_port']}" class="img-port" width="100%">
              <p><br>{$imagen.descripcion}</p>
            </div>
          {/foreach}      </div>
      <div class="col-md-2"></div>
    </div>
      	


{include file="placa.tpl"}

{include file="footer.tpl"}