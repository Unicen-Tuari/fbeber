{include file = "header.tpl"}
    <div class="col-md-12">
      <div class="col-md-8">
      <br><br>
        <img class="img-thumbnail"src="images/gym.jpg" width="100%">
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
        <p>***Traidas de la base de datos***</p>
        {foreach $profesores as $profesor}
        <div class="col-md-4">
          <img src="images/perfiles/perfil1.png" alt="..." class="img-circle" width="140px" height="140px">
          <h3>{$profesor.nombre}</h3>
          <p>{$profesor.descripcion}</p>
          <p>Encontrame en:<img src="images/redes/link-color.png" width="25px;" class="zoom"></p>
        </div>
        {/foreach}
            <div class="col-md-12"><p>***fin de base de datos***</p></div>

        <div class="col-md-4">
          <img src="images/perfiles/perfil1.png" alt="..." class="img-circle" width="140px" height="140px">
          <h3>Pepe</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p>Encontrame en:<img src="images/redes/link-color.png" width="25px;" class="zoom"></p>
        </div>
        <div class="col-md-4">
          <img src="images/perfiles/perfil2.png" alt="..." class="img-circle"width="140px" height="140px">
          <h3>Maria</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p>Encontrame en:<img src="images/redes/link-color.png" width="25px;" class="zoom"></p>
        </div>
        <div class="col-md-4">
          <img src="images/perfiles/perfil3.png" alt="..." class="img-circle" width="140px" height="140px">
          <h3>Coca</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p>Encontrame en:<img src="images/redes/link-color.png" width="25px;" class="zoom"></p>
        </div>
      </div>
    </div>
  </div>

{include file = "footer.tpl" }
