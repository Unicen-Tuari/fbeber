{include file="header.tpl"}

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Modelos
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">/</li>
                    <li>Categor&iacute;as</li>
                    <li class="active">/</li>
                    <li><a href="consulta_colecciones.php">Colecciones</a></li>
                    <li class="active">/</li>
                    <li>Modelos</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            
            <div class="col-md-8">
            
            {section name=lnombres loop=$nombre_modelo}
            <button class="btn" data-toggle="modal" data-target="#myModal">
            <img class="img-hover" src="./images/catalogo/{$img_modelo[lnombres]}">
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
                    <h4 class="modal-title" id="myModalLabel">{$nombre_modelo[lnombres]}</h4>
                  </div>
                  
                  <div class="modal-body">
                    
                    <!-- Elastislide Carousel --> 
                   
                        <a href="./consulta_modelos.php">
                        <img class="img-hover" src="./images/catalogo/{$img_dispositivo[lnombres]}" height="100%">
                        {$nombre_dispositivo[lnombres]}
                        </a>
                    
                    <h3>Envie su consulta</h3>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Nombre:</label>
                                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Tel&eacute;fono:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Consulta:</label>
                                    <p>Detalle dispositivo(tamaño, modelo, etc)</p>
                                    <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>
            {/section}
        </div>
        <!-- /.row -->

{include file="lateral.tpl"}        
{include file="footer.tpl"}