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