$(window).scroll(function () {
    // Récupération de l'élément avec l'id temoignage
    // Récupération du haut de l'élément
    var top_of_element = $('#temoignages').offset().top;
    // Récupération du bas de l'élément
    var bottom_of_element = $('#temoignages').offset().top + $('#temoignages').outerHeight();

    // Comparaison avec la position de l'écran
    // Récupération du bas de l'écran
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    // Récupération du haut de l'écran
    var top_of_screen = $(window).scrollTop();

    // Si le bas de l'écran et supérieur à la position haute de l'élement et si le haut de l'écran et inférieur à la position bas de l'élement
    if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)) {
        // Ajoute les classes aux éléments indiqués ce qui permet d'ajouter les animations au moment voulu
        $(".temoignage1").addClass("animationTemoignage1");
        $(".temoignage2").addClass("animationTemoignage2");
        $(".temoignage3").addClass("animationTemoignage3");
    }
});