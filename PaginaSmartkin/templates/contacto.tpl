{include file="header.tpl"}
    
                  
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

            
            <br>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51249.48241047209!2d-61.74474315!3d-36.60007755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95ea99d2a07a0eab%3A0x5de89f75bca3303!2sDaireaux%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1411760318756" width="600" height="450" frameborder="0" style="border:0"></iframe>
{include file="footer.tpl"}