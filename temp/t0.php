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
    <?php include("../modulos/top.php"); ?>
    </div>





<div id="banner_bar">
<?php 
var_dump($_ENV);
  echo $http_response_header;
?>
</div>


<div class="container-fluid" id="footer">
  <?php include("../modulos/footer.php"); ?>
</div>


</body>
</html>




