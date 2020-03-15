<?php

/**
 * Fonction réutilisable permettant de formater facilement les titres
 *
 * @param $titre titre voulu
 * @return $txt titre formaté
 */
function formatageTitre($titre)
{
    // $txt = '<h2 class="m-5 perso_bgBlue text-white rounded-lg p-3"> > ';
    // m-5 : marge extérieur de 5
    // text-primary : texte de couleur bleue
    // border-bottom : bordue uniquement en bas
    // border-primary : bordure de couleur bleue
    // p-3 : padding de 3
    $txt = '<h2 class="m-5 text-primary border-bottom border-primary p-3">';
    $txt .= $titre;
    $txt .= '</h2>';

    return $txt;
}
