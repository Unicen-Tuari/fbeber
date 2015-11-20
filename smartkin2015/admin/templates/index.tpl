{include file="header.tpl"}
 <button id="logout" class="btn btn-primary">Logout</button>
<div class="col-md-3 bordes panel-izq">
    <div class="menu col-md-12 black">
        <div class="col-md-12">
            {if isset($admin)}
                {foreach $admin as $info}
                    <h1>{$info['name_admin']}</h1>
                {/foreach}

            {else}      
                <h1>Por favor inicie sesión</h1>
                <button id="login" class="btn btn-lg btn-primary btn-block" onClick="window.location = 'login.php';">Login</button>
                    <br><br>
                    <button>Slides</button><br>
                    <button>Slides</button><br>
                    <button>Slides</button><br>
                    <button>Slides</button><br>
                    <button>Slides</button><br>
            {/if}
        </div>
    </div>
</div>
 
<div class="col-md-9 bordes panel-der ">
    <div class="col-md-12 bordes black">
        <p class="text-right">Ir a Smartkin</p>
    </div>
    <div class="col-md-12 bordes">
        <h3 class="text-center">Panel de Control</h3>
    </div>
    <div class="col-md-12 bordes text-center">
        <!--redes sociales-->
    <div class="col-md-3 bordes">
        <h3 class="fb">Facebook</h3>
    </div>
    <div class="col-md-3 bordes">
        <h3 class="gm">Google Plus</h3>
    </div>
    <div class="col-md-3 bordes">
        <h3 class="tw">Twitter</h3>
    </div>
    <div class="col-md-3 bordes">
        <h3 class="ml">Mercado Libre</h3>
    </div>
    <!--smartkin-->
    <div class="col-md-3 bordes">        
        <h3 class="text">Usuarios</h3>        
        {foreach $cantusuarios as $cant}
            <h3>{$cant.cantidad}</h3>
        {/foreach}
    </div>
    <div class="col-md-3 bordes">
        <h3 class="text">Favoritos</h3>
        {foreach $cantfavoritos as $cantidad}
            <h3>{$cantidad.cantidad}</h3>
        {/foreach}
    </div>
    <div class="col-md-3 bordes">
        <h3 class="text">Comentarios</h3>
        {foreach $cantcomentarios as $cantidad}
            <h3>{$cantidad.cantidad}</h3>
        {/foreach}
    </div>

    </div>
        {include file="admin_usuarios.tpl"}
        {include file="admin_portfolios.tpl"}
        {include file="admin_colecciones.tpl"}
        {include file="admin_comentarios.tpl"}
        {include file="admin_informacion.tpl"}
    </div>


{include file="footer.tpl"}
