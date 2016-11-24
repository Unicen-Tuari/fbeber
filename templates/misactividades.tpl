<table class="table">
    {foreach $misactividades as $dato}
    <tr>
      <td><b>{$dato.nombre}</b></td>
      <td>{$dato.apyno}</td>
      <td>$dato.horarios}</td>
      <td class="text-right"><button type="button" class="label label-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></td>
    </tr>
    {/foreach}
  </table>
  