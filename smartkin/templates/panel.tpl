
{if isset($usuario)}
		{foreach $usuario as $info}
                    
            {if !$info['bloqueado']}
                
                {include file="user.tpl"}
            {else}
            <div class="col-md-12">
                <div class="col-md-6 text-center">
                    <div class="text-center icon-user" style="background:url('./images/images_sys/anonimo.jpg') center;"><br>
                        <h3 class="h3-bloqueado">FAIL</h3>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <br><p><b>USUARIO BLOQUEADO!</b> Contáctese con el Administrador.</p> 
                </div>
                <button id="logout" class="btn btn-lg btn-primary ">Intentar de nuevo</button> 
            </div>
            {/if}
        {/foreach}
{else}
<div class="col-md-12 form-login">
	<form id="formlogin" class="form-signin" method="post" >
        <h4 class="">Inciar Sesión</h4>
        
        <input id="email_user" name="email_user" type="text" class="form-control" placeholder="Correo Electrónico" autofocus="">
        <input id="pass_user" name="pass_user" type="password" class="form-control" placeholder="Contraseña">
        <div id="error" class="alert alert-danger" style="display: none;">
            <p class="text-center">Olvide mi contraseña!!</p>
        </div>
        <div class="text-right">
        <button id="signin" class="btn btn-success" type="submit">Entrar 
            <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> 
        </button>
        </div>
        
    </form>
    <a href="#registrarse">REGISTRARSE</a>
</div>      
{/if}
<br>
              

        <div class="bordes col-md-12">
            <div class="fb-page" data-href="https://www.facebook.com/facebook" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/florencia.flor.526"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
        </div>

        <div class="bordes col-md-12">
            <a class="twitter-timeline"  href="https://twitter.com/moniflopi" data-widget-id="660905774391173120">Tweets de @moniflopi.</a> 
        </div>

        <div class="bordes col-md-12">
            <h1>PUBLICIDAD</h1>
        </div>

        <div class="bordes col-md-12">
            <h1>PUBLICIDAD</h1>
        </div>

        <div class="bordes col-md-12 redes">
            <h1>PUBLICIDAD</h1>
        </div>

        <div class="bordes col-md-12 redes">
            <h1>PUBLICIDAD</h1>
        </div>

       