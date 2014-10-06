{include file="header.tpl"}
    
    <div class="container">
    
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contacto</h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Contacto</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- Mapa -->
            <div class="col-md-8">
            
            <br><br><br>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51249.48241047209!2d-61.74474315!3d-36.60007755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95ea99d2a07a0eab%3A0x5de89f75bca3303!2sDaireaux%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1411760318756" width="600" height="450" frameborder="0" style="border:0"></iframe>

            </div>
            
            <div class="col-md-4">
                <h3>Detalle de Contacto</h3>
                <p>
                {section name=lnombres loop=$email}
                    Correo Electr&oacute;nico: {$email[lnombres]}
                    <br>
                    Direcci&oacute;n: {$direccion[lnombres]}
                    <br>
                    Tel&eacute;fono: {$telefono[lnombres]}
                    <br>
                {/section}                   
                </p> 

            <!-- Consulta -->

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
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
        
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
        <hr>

{include file="footer.tpl"}