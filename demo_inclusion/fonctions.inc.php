<?php

/**
 * fonction  qui ajoute de l'enrobage à un texte
 * @param $pMot
 * @param $pEnjoliveur
 * @return string
 */
function faireJoliSubtile($pMot, $pEnjoliveur) {
    return $pEnjoliveur.' '.$pMot.' '.$pEnjoliveur;
}




/**
 * fonction bidon qui qui fait un calcul quelconque
 * @param $pNb
 * @return mixed
 */
function calculSubtile($pNb){
    $res=$pNb*3 +1;
    return $res;
}




//teste des fonctions:

//var_dump(calculSubtile(10));
//var_dump(faireJoliSubtile("salut", "*"));