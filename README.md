# Portfolio

## Mise en place de la structure
Dans le projet portfolio :
- css/
- js/
- pages/
    - commons/
        - menu.php
        - template.php : mise en place d'une structure
    - contact.php
    - index.php : page d'accueil

## Menu
````html
<!-- pages/commons/menu.php -->
<!-- ml-auto : margin left auto -->
<!-- mr-auto : margin right auto -->
<!-- Rajout d'une marge sur le côté indiqué -->
<ul class="navbar-nav ml-auto">
    <!-- mx-2 : margin sur l'axe x de 2em -->
    <li class="nav-item mx-2">
````

## Carrousel Bootstrap
````html
<!-- w-75 : width = 75%, h-75 : height = 75% -->
<!-- mx-auto : margin auto pour centrer -->
<!-- img-thumbnail : ajoute un effet arrondi aux images -->
<img src="../sources/images/cours1.png" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
````

## Vidéo (à faire)
iFrame à copier sur la page index.php après le h2

## Modifier le menu
Rajouter des ancres qui envoient vers les id voulus sur la page

````css
/*  */
/* active le défilement doux */
html {
    scroll-behavior: smooth !important;
}
````

## Partie compétences
### Les progress bars
Ajout des compétences avec progress bars et redimensionnement suivant la taille d'écran : https://getbootstrap.com/docs/4.0/components/progress/
````html
<!-- col-12 : 1 colonne sur petit écran -->
<!-- col-6 : 2 colonnes sur écran moyen -->
<!-- col-3 : 4 colonnes sur très grand moyen -->
<!-- my-4 : margin de 4 sur l'axe des y -->
<div class="col-12 col-md-6 col-xl-4 my-4">
    HTML / CSS
    <div class="progress">
        <!-- bg-success : fond vert -->
        <!-- width: 50% : progress bar remplie à 50% -->
        <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">50%</div>
    </div>
</div>
````

### Les cards et modals
Ajout du portfolio avec des cards : https://getbootstrap.com/docs/4.0/components/card/

````html
<!-- w-100 : taille de 100% dans le div -->
<!-- d-block : display block -->
<img src="../sources/images/cours1.png" class="d-block w-100">
````

On peut grouper les cards de cette façon
````html
<!-- Utiliser pour grouper les cards -->
<div class="card-group">
    <!-- Ne pas hésiter à retirer les styles CSS de base pour adapter la taille des cards -->
    <div class="card border-success mb-3">
        <!-- card 1 -->
    </div>

    <div class="card border-success mb-3">
        <!-- card 2 -->
    </div>
    <!-- Autres cards -->
````

### Partie témoignanes
Utilisation des classes d'images Bootstrap avec arrondie(border) : https://getbootstrap.com/docs/4.0/utilities/borders/
````html
<!-- pages/commons/index.php -->
<div class="col-12 col-lg-4">
    <img src="../sources/images/aigle.jpg" class="rounded-circle" style="width:140px;height:140px">
    <h3>Client 1</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora doloremque sapiente iure nam incidunt nostrum corrupti esse voluptatibus quia? Doloremque dignissimos reiciendis, quo id distinctio eaque corporis natus tempora. Quam!</p>
</div>
````


### Footer
Création de la partie footer dans le template
````php
// pages/commons/template.php
<body>
    <?php require 'menu.php' ?>
    <?= $content ?>
    // logo copyright avec alt + 8888
    <div class="perso_bgBlue text-white text-center p-3">©Alexandre CAIGNARD</div>
</body>
````