<head>
<?php include("../templates/head.php"); ?>

<style type="text/css">
.slider {
    width: 95vw;
    height: auto;
    margin: auto;
    overflow: hidden;
}

.slider .slide-track {
    display: flex;
    animation: scroll 10s linear infinite;
    -webkit-animation: scroll 10s linear infinite;
    width: calc(200px * 40);
}

.slider .slide {
    width: 200px;
    margin: 5px;
}

.slider .slide img {
    width: 200px;
    border-style:outset;
    border-color: lightgray;
    margin: auto;
}

@keyframes scroll { 
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        -webkit-transform: translateX(calc(-200px * 20));
        transform: translateX(calc(-200px * 20));
    }
}




</style>

</head>




<div class="slider">
        <div class="slide-track">
            <div class="slide">
                <img src="../img/sponsors/1.png" alt="">
            </div>
            <div class="slide">
                <img src="/../img/sponsors/2.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/bicineta-logo.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/munasun.jpg" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/7.png" alt="">
            </div>  
            <div class="slide">
                <img src="../img/sponsors/3.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/4.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/5.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/6.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/7.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/1.png" alt="">
            </div>
            <div class="slide">
                <img src="/../img/sponsors/2.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/3.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/4.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/5.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/6.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/7.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/guyra.jpg" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/logotipo-amabici-300x103.png" alt="">
            </div>
            <div class="slide">
                <img src="../img/sponsors/LOGO_SIGenBici-350x350.png" alt="">
            </div>    
   
        </div>
    </div>






    	
