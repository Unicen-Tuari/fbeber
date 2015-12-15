
<!--ENVIO DE MAIL-->   
        
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
            <label class="sr-only" for="consulta">Consulta</label>
            <span class="input-group-addon glyphicon glyphicon-comment"></span>
            <textarea class="form-control" name="consulta" rows="4" placeholder="*Ingrese aqui su consulta" required></textarea>
        </div>
        <p>* Campos obligatorios</p>
        <div class="form-group has-success text-center">
            <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span>Reset</button>
            <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-ok"></span>Enviar</button>
        </div>
    </form>
    </div>        

   </div> 
    
            