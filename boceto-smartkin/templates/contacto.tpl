<div class="page-header"></div>

<h1>Contacto</h1>

    {foreach $informacion as $dato} 
    <br><p>NOTA: hacer tablas</p>
    <p>
        <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"> {$dato.tel1}</span> | <span class="glyphicon glyphicon-phone" aria-hidden="true">{$dato.tel2}</span> | <span class="glyphicon glyphicon-home" aria-hidden="true"> {$dato.otro}</span>
    </p>
    <br>
    
    {/foreach}

<!--ENVIO DE MAIL-->   
        <h3 class="text-center"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Envíe su consulta...</h3>
        
        <div class="form-group has-success">
            <input type="text" class="form-control" id="inputSuccess1"  placeholder="*Email">
        </div>

        <div class="form-group has-success">
            <input type="text" class="form-control" id="inputSuccess1"  placeholder="*Asunto">
        </div>
        
        <div class="form-group has-success">
            <textarea name="comment" form="usrform" class="form-control" placeholder="*Consulta"></textarea>
        </div>
        <p>* Campos obligatorios</p>
        <div class="text-center">
            <button type="button" class="btn btn-default btn-md te">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Enviar
            </button>
        </div>
    

