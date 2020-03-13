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

<div class="container text-center" id="presentation">
    <!-- marge extérieur de 5 -->
    <h2 class="m-5 perso_colorBlueLight">Alexandre : Etudiant à l'ENI Ecole Informatique</h2>
</div>

<div class="container text-center" id="competences">
    <!-- marge extérieur de 5 -->
    <h2 class="m-5 perso_colorBlueLight">Mes compétences</h2>
    <div class="row">
        <div class="col-12 col-md-6 col-xl-4 my-4">
            HTML / CSS
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-4">
            HTML / CSS
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-4">
            HTML / CSS
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-4">
            HTML / CSS
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-4">
            HTML / CSS
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-4">
            HTML / CSS
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
        </div>

    </div>
</div>

<?php
$content = ob_get_clean();

require "commons/template.php";
