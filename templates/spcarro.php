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
    animation: scroll 60s linear infinite;
    -webkit-animation: scroll 60s linear infinite;
    width: calc(200px * 8);
}

.slider .slide {
    width: 200px;
}

.slider .slide img {
    width: 200px;
}

@keyframes scroll { 
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0);
    }
    100% {
        -webkit-transform: translateX(calc(-200px * 5));
        transform: translateX(calc(-200px * 5));
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
   
   
   
        </div>
    </div>






    	
