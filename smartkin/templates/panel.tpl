
{if isset($usuario)}
		{foreach $usuario as $info}
                    
            {if !$info['bloqueado']}
                
                {include file="user.tpl"}
            {else}
            <div class="col-md-12">
                <div class="col-md-6 text-center">
                    <div class="text-center icon-user" style="background:url('{$info.img_user}'); background-size:100%;"><br>
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
<div class="col-md-12">
    <div class="col-md-4 text-right">
        <p class="a-menu">EMAIL:</p>
        <p class="a-menu">CONTRASEÑA:</p>
    </div>
    <div class="col-md-5">
        <form id="formlogin" class="form-signin" method="post" >
        <input id="email_user" name="email_user" type="text" autofocus=""> 
        <input id="pass_user" name="pass_user" type="password">
        <button type="submit">ENTRAR</button>
        </form>
    </div>
   
</div>
    <div class="col-md-12 text-right">
        <button type="submit" data-toggle="modal" data-target="#myModal">REGISTRARSE</button>
    </div>
{/if}

              


       