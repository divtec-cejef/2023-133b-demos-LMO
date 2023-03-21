<?php
/**
 * Created by PhpStorm.
 * User: lmo
 * Date: 11.09.17
 * Time: 15:52
 */

function testVarGlobale(){
    global $gVar;
    $gVar = 17;

    // Syntaxe alternative, remplace les 2 lignes ci-dessus.
    //$GLOBALS['gVar'] = 30;
}

// Initialisation de la variable globale.
$gVar = 11;
echo 'debut programme ', $gVar, '<br />'; // 11.
testVarGlobale();
echo 'fin programme ', $gVar, '<br />'; // 30.



?>