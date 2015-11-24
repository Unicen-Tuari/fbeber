{include file="header.tpl"}

    
    <div class="bordes col-md-3 redes">
        {include file="panel.tpl"}
    </div>
  
    <div class="inicio bordes col-md-9">
            
        <div id="inicio" class="col-md-12">
            {include file="slides.tpl"}
        </div>     

        <div id="colecciones" class="col-md-12">
            <div class="page-header"></div>  
              <h1>Colecciones</h1>
              <p>NOTA: hacer galeria</p>
              <iframe src="./colecciones.php" class="col-md-12" height="400px"></iframe>

        </div>

        <div id="portfolios" class="col-md-12">
        <div class="page-header"></div>
            <h1>Portfolios</h1>
            <h4>Gracias por confiar en nosotros!</h4>
            <iframe src="./portfolios.php" class="col-md-12" height="400px"></iframe>
        </div>

        <div id="contacto" class="col-md-12">
            <div class="page-header"></div>
            {include file="contacto.tpl"}
        </div>

        <div id="nosotros" class="col-md-12">
            <div class="page-header"></div>
            {include file="nosotros.tpl"}  
        </div>
        
        <div id="comentarios" class="col-md-12">
            <div class="page-header"></div>
            <h1>Comentarios</h1>                    
            <iframe src="./comentarios.php" class="col-md-12" height="300px"></iframe>
        </div>

        <div class="col-md-12" id="registrarse">
            <div class="page-header"></div>
            {include file="registrarse.tpl"}
        </div>

    </div>

 

    </div> <!-- /container -->
{include file="footer.tpl"}
