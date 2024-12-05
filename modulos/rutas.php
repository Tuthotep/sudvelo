<head>
<?php include("../modulos/head.php"); ?>
</head>

<div class="row align-items-start">

<div class="col-3">
  <div class="list list-group list-group-flush">

    <a href="../sv1/" class="item row route-1" data-route-id="1">
        <div class="col-auto route-icon">
            <img class="img-fluid" src="../img/rutas/csv1.png" loading="lazy" alt="sv-1">
        </div>
        <div class="col route-name">
            <div class="color-bar" style="background-color:blue"></div>
            <span>Ruta Andina</span>
        </div>
    </a>
    <a href="../sv2/" class="item row route-2" data-route-id="2">
        <div class="col-auto route-icon">
            <img class="img-fluid" src="../img/rutas/csv2.png" loading="lazy" alt="sv-2">
        </div>
        <div class="col route-name">
            <div class="color-bar" style="background-color:green"></div>
            <span>Ruta Pampeana</span>
        </div>
    </a>
    <a href="../sv3/" class="item row route-3" data-route-id="3">
        <div class="col-auto route-icon">
            <img class="img-fluid" src="../img/rutas/csv3.png" loading="lazy" alt="sv-3">
        </div>
        <div class="col route-name">
            <div class="color-bar" style="background-color:black"></div>
            <span>Ruta Atlántica</span>
        </div>
    </a>
    <a href="../sv4/" class="item row route-4" data-route-id="4">
        <div class="col-auto route-icon">
            <img class="img-fluid" src="../img/rutas/csv4.png" loading="lazy" alt="sv-4">
        </div>
        <div class="col route-name">
            <div class="color-bar" style="background-color:red"></div>
            <span>Ruta Norte&ntilde;a</span>
        </div>
    </a>
    <a href="../sv5/" class="item row route-5" data-route-id="5">
        <div class="col-auto route-icon">
            <img class="img-fluid" src="../img/rutas/csv5.png" loading="lazy" alt="sv-5">
        </div>
        <div class="col route-name">
            <div class="color-bar" style="background-color:yellow"></div>
            <span>Ruta Selv&aacute;tica</span>
        </div>
    </a>             

  </div>
</div>

<div class="col-6">

<?php include("../inicio/mapa.php"); ?>
  
</div>


<div class="col-3">

</div>



</div>