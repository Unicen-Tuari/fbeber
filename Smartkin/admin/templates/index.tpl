{include file="header.tpl"}

<div class="col-md-12">
    {if isset($name_admin)}

        <div class="col-md.6">
                <h1>{$name_admin}<button id="logout" class="btn btn-primary">Salir</button><br><p class="text-success">Panel de Control:</p></h1>
        </div>
        
    {else}      
        <div class="col-md.6">
            {include file="login.tpl"}
        </div>
    {/if}   
    
<br>
</div> <!-- /container -->

{include file="footer.tpl"}