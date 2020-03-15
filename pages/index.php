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

<div class="container text-center" id="portfolio">
    <h2 class="m-5 perso_colorBlueLight">Mon Portfolio</h2>
    <div class="card-group">
        <div class="card border-success mb-3">
            <div class="card-header bg-transparent border-success">Cours JavaScript</div>
            <div class="card-body text-success p-0">
                <!-- w-100 : taille de 100% dans le div -->
                <img src="../sources/images/cours1.png" class="d-block w-100">
            </div>
            <div class="card-footer bg-transparent border-success">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cours1">En savoir plus</button>
            </div>
        </div>
        <div class="card border-success mb-3">
            <div class="card-header bg-transparent border-success">Cours PHP</div>
            <div class="card-body text-success p-0">
                <!-- w-100 : taille de 100% dans le div -->
                <img src="../sources/images/cours3.png" class="d-block w-100">
            </div>
            <div class="card-footer bg-transparent border-success">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cours3">En savoir plus</button>
            </div>
        </div>
        <div class="card border-success mb-3">
            <div class="card-header bg-transparent border-success">Cas pratique PHP / MYSQL</div>
            <div class="card-body text-success p-0">
                <!-- w-100 : taille de 100% dans le div -->
                <img src="../sources/images/catalogue.png" class="d-block w-100">
            </div>
            <div class="card-footer bg-transparent border-success">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#catalogue">En savoir plus</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cours1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cours JavaScript</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="../sources/images/cours1.png" class="d-block w-100">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente rem doloribus asperiores eum nobis quaerat laboriosam sequi aut optio corrupti aliquid voluptatum voluptas, quam veritatis dolorem excepturi possimus fugiat accusantium!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="cours3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cours PHP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="../sources/images/cours3.png" class="d-block w-100">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente rem doloribus asperiores eum nobis quaerat laboriosam sequi aut optio corrupti aliquid voluptatum voluptas, quam veritatis dolorem excepturi possimus fugiat accusantium!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="catalogue" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cas pratique PHP / MYSQL</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="../sources/images/catalogue.png" class="d-block w-100">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente rem doloribus asperiores eum nobis quaerat laboriosam sequi aut optio corrupti aliquid voluptatum voluptas, quam veritatis dolorem excepturi possimus fugiat accusantium!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class="container text-center" id="temoignages">
    <!-- marge extérieur de 5 -->
    <h2 class="m-5 perso_colorBlueLight">Mes témoignages</h2>
    <div class="row">
        <div class="col-12 col-lg-4">
            <img src="../sources/images/aigle.jpg" class="rounded-circle" style="width:140px;height:140px">
            <h3>Client 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora doloremque sapiente iure nam incidunt nostrum corrupti esse voluptatibus quia? Doloremque dignissimos reiciendis, quo id distinctio eaque corporis natus tempora. Quam!</p>
        </div>
        <div class="col-12 col-lg-4">
            <img src="../sources/images/loup.jpg" class="rounded-circle" style="width:140px;height:140px">
            <h3>Client 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora doloremque sapiente iure nam incidunt nostrum corrupti esse voluptatibus quia? Doloremque dignissimos reiciendis, quo id distinctio eaque corporis natus tempora. Quam!</p>
        </div>
        <div class="col-12 col-lg-4">
            <img src="../sources/images/chat.jpg" class="rounded-circle" style="width:140px;height:140px">
            <h3>Client 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora doloremque sapiente iure nam incidunt nostrum corrupti esse voluptatibus quia? Doloremque dignissimos reiciendis, quo id distinctio eaque corporis natus tempora. Quam!</p>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();

require "commons/template.php";
