{include file = 'header.tpl'}

<br><h1>Bienvenidos</h1>
  <br>

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slides/slide1.png" alt="..." width="100%">
    </div>
    <div class="item">
      <img src="images/slides/slide2.png" alt="..." width="100%;">
    </div>

    <div class="item">
      <img src="images/slides/slide3.png" alt="..." width="100%;">
    </div>  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!--fin de carrousel-->

<div class="col-md-12">
  <br>
  <h1>Promociones</h1>
  <p>Lorem Ipsum</p>
  <br>
  <div class="col-md-3">
    <div class="promocion1">
      <h3>Promoción Amigos</h3>
      <h4>$200</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
      </p>

    </div>
  </div>
  <div class="col-md-3">
    <div class="promocion2">
      <h3>Promoción del MES</h3>
      <h4>$300</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="promocion3">
      <h3>Promoción 2x1</h3>
      <h4>$400</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="promocion4">   
      <h3>Promoción por año</h3>
      <h4>$500</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
  </div>
</div>
{include file = 'footer.tpl'}
