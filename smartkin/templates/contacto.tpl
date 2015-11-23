<div class="page-header"></div>  
<div class="col-md-12">
<h1>Contacto</h1>
    
      <div class="col-md-6 bordes">
        {foreach $informacion as $dato} 
        <br><br><br>
        <h3>
            <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"> {$dato.tel1}</span> | <span class="glyphicon glyphicon-phone" aria-hidden="true">{$dato.tel2}</span> | <span class="glyphicon glyphicon-home" aria-hidden="true"> {$dato.otro}</span>
        </h3>
        
        {/foreach}
    </div>

  <div class="col-md-6 bordes">

<!--ENVIO DE MAIL-->   
        <h3 class="text-center"><span class="glyphicon glyphicon-send" aria-hidden="true"></span> Envíe su consulta...</h3>
        <div class="row" id="alerta_mail"></div>
        
        <form action="" id="form_mail">
            <div class="form-group has-success">
                <label class="sr-only" for="nombre_apellido">Nombre y Apellido</label>
                <span class="input-group-addon glyphicon glyphicon-user"></span>
                <input class="form-control" type="text" name="nombre_apellido" placeholder="*Nombre y Apellido" pattern="[a-zA-Z]+\s[a-zA-Z]+" title="Formato: Nombre Apellido" required>          
            </div>
      

        <div class="form-group has-success">
            {literal}
                <label class="sr-only" for="email">Email</label>
                <span class="input-group-addon glyphicon glyphicon-envelope"></span>
                <input class="form-control" type="email" name="mail" placeholder="*Direccion de E-Mail" pattern="[\w-.]+@[\w-.]+\.\w{2,3}" title="Formato: xxx@yyy.zzz" required>
            {/literal}
        </div>
        
        <div class="form-group has-success">
            {literal}
                <label class="sr-only" for="telefono">Telefono</label>
                <span class="input-group-addon glyphicon glyphicon-earphone"></span>
                <input class="form-control" type="tel" name="telefono" placeholder="*Telefono (Incluya Cod. Área)" pattern="[\d]{3,5}-[\d]{7,12}" title="Formato: (Cod. Área)-(Numero Completo)" required>
            {/literal}
        </div>
        <div class="form-group has-success">
            <label class="sr-only" for="consulta">Consulta</label>
            <span class="input-group-addon glyphicon glyphicon-comment"></span>
            <textarea class="form-control" name="consulta" rows="4" placeholder="*Ingrese aqui su consulta" required></textarea>
        </div>
        <p>* Campos obligatorios</p>
        <div class="form-group has-success">
            <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span>Cancelar</button>
            <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-ok"></span>Enviar</button>
        </div>
    </form>
    </div>        

   </div> 
    
            