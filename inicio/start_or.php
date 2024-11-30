<!DOCTYPE html>
<html lang="es">

<head>
  <?php include("../templates/head.php"); ?>

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>

<body">
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<div class="container-fluid" id="page">

  <div class="container-fluid" id="top">

    <?php include("../templates/top.php"); ?>

  </div>

  <div id="myCarousel" class="carousel slide my-1" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container-fluid">
          <div class="carousel-caption text-start">
            <h1>Colabora con SudVelo!!!</h1>
            <p class="opacity-75">Su colaboración nos ayuda al desarrollo de la red SudVelo,para brindar una infraestructura ciclista segura, coherente, para el beneficio de todos los ciclistas, tanto cicloturistas como ciclistas frecuentes.Proximamente, tendremos mercadería exclusiva.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Colabora</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container-fluid">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container-fluid">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <a name="rutas"></a>

  <div class="container-fluid text-center my-3 border border-dark-subtle" id="main">
    <div class="row align-items-start">

      <div class="col-3">

        <div class="list list-group list-group-flush">
    
          <a href="../sv1/" class="item row route-1" data-route-id="1">
              <div class="col-auto route-icon">
                  <img class="img-fluid" src="../img/wipicon.png" loading="lazy" alt="sv-1">
              </div>
              <div class="col route-name">
                  <div class="color-bar" style="background-color:#beb92b"></div>
                  <span>Ruta Andina</span>
              </div>
          </a>
          <a href="../sv2/" class="item row route-2" data-route-id="2">
              <div class="col-auto route-icon">
                  <img class="img-fluid" src="../img/wipicon.png" loading="lazy" alt="sv-2">
              </div>
              <div class="col route-name">
                  <div class="color-bar" style="background-color:#9dc1d9"></div>
                  <span>Ruta Inca</span>
              </div>
          </a>
          <a href="../sv3/" class="item row route-3" data-route-id="3">
              <div class="col-auto route-icon">
                  <img class="img-fluid" src="../img/wipicon.png" loading="lazy" alt="sv-3">
              </div>
              <div class="col route-name">
                  <div class="color-bar" style="background-color:#429ddd"></div>
                  <span>Ruta Libertadora</span>
              </div>
          </a>
          <a href="../sv4/" class="item row route-4" data-route-id="4">
              <div class="col-auto route-icon">
                  <img class="img-fluid" src="../img/wipicon.png" loading="lazy" alt="sv-4">
              </div>
              <div class="col route-name">
                  <div class="color-bar" style="background-color:#ffe733"></div>
                  <span>Ruta Norte&ntilde;a</span>
              </div>
          </a>
          <a href="../sv5/" class="item row route-5" data-route-id="5">
              <div class="col-auto route-icon">
                  <img class="img-fluid" src="../img/wipicon.png" loading="lazy" alt="sv-5">
              </div>
              <div class="col route-name">
                  <div class="color-bar" style="background-color:#e3a7c8"></div>
                  <span>Ruta Selv&aacute;tica</span>
              </div>
          </a>             
  
        </div>
      </div>

      <div class="col-6">

      <?php include("../inicio/mapa.php"); ?>
        
      </div>


      <div class="col-3">
      <?php include("./c_rutas.php"); ?>
      </div>



    </div>
  </div>




  <div class="container-fluid" id="footer">
    <?php include("../templates/footer.php"); ?>
  </div>


  
</div>
                                                              

</body>

</html>
