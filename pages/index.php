<?php ob_start(); ?>

<div id="carouselExampleIndicators" class="carousel slide perso_bgBlueDegrede" data-ride="carousel">
    <!-- indicateurs, rectangles en bas du carrousel -->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" class="bg-dark" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <!-- w-75 : width = 75%, h-75 : height = 75% -->
        <!-- mx-auto : margin auto pour centrer -->
        <!-- img-thumbnail : ajoute un effet arrondi aux images -->
            <img src="../sources/images/cours1.png" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../sources/images/cours3.png" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../sources/images/catalogue.png" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php
$content = ob_get_clean();

require "commons/template.php";
