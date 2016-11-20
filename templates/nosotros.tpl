    <div class="col-md-12">
      <div class="col-md-8">
      <br><br>
        <img class="img-thumbnail" src="images/gym.jpg" width="100%">
      </div>

      <div class="col-md-3">
        <br><br>
        <h2>¿Quiénes somos?</h2>
        <br>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
      </div>

      <div class="col-md-12">
        <br>
        <h2>Profesores</h2>
        <br>
        {foreach $profesores as $profesor}
        {if $profesor.id != 1}
        <div class="col-md-2">
          <img src="images/{$profesor.foto}" alt="..." class="img-circle" width="140px" height="140px">
          <h3>{$profesor.apyno}</h3>
          <h4>Profesor/a de {$profesor.nombreAct}</h4>
          <p>{$profesor.descripcion}</p>
        </div>
        {/if}
        {/foreach}
           
      </div>
    </div>
  </div>


