<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../styles.css'>
    <link rel="stylesheet" href="../ico/font-awesome/css/font-awesome.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
    
    
</head>
<body>
  <div class="container-fluid" id="top">
    <?php include("../templates/top.php"); ?>
    </div>



<!--

<div">
  <input type="checkbox" name="charg" class="charg">
  <input type="checkbox" name="chpar" class="chpar">
  <input type="checkbox" name="checu" class="checu">
</div>

<div class="news">
  <div class="arg-news">
    Noticias de Argentina
  </div>
  <div class="par-news">
    Noticias de Paraguay
  </div>
  <div class="ecu-news">
    Noticias de Ecuador
  </div>
  <div class="par-news">
    Noticias de Paraguay
  </div>

</div>
-->

<script type="text/javascript">
  var imgs = new Array("images/banner5.png", "images/banner5.png", "images/banner5.png", "images/banner4.png");
  var alt = new Array();
  var bgcolor = new Array("#202020", "#00040F", "#202020");
  var currentAd = 0;
  var imgCt = 5;

  function cycle() {
      if (currentAd == imgCt) {
          currentAd = 0;
      }
      var div = document.getElementById('banner_bar');
      //div.style.backgroundColor = bgcolor[currentAd]
      var banner = document.getElementById('adBanner');
      banner.src = imgs[currentAd]
      banner.alt = alt[currentAd]
      currentAd++;
  }
  window.setInterval("cycle()", 8000);        
</script>   
<div id="banner_bar">
  <img class="banner" src="images/banner5.png" id="adBanner"> 
</div>


<div class="container-fluid" id="footer">
  <?php include("../templates/footer.php"); ?>
</div>


</body>
</html>




