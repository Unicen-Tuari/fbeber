<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h3>Profesor {$profesor[0].apyno}</h3>
{if $inscriptos == NULL}
<h4>No hay</h4>
{else}

{foreach $inscriptos as $dato}

<table class="table table-striped">
<tr>
    <td class="text-center"><p><b>{$dato.apyno}</td>
    
</tr>
</table>
{/foreach}
{/if}
      
