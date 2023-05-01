<?php
/**
 * Created by PhpStorm.
 * User: moinlau
 * Date: 08.05.2018
 * Time: 09:48
 */


// les contrôleurs accèdent à la config du site
require_once 'inc/utils.php';


// traitement
$num = "--";

// traitement du formulaire si'il est envoyé
if(isset($_GET['btnEnvoi'])){
    //echo "get <br>";
    r($_GET);

    //filter la valeur reçue
    $num = filter_input(INPUT_GET, 'tbx1', FILTER_VALIDATE_INT);
    r($num);
}

// appel de la vue correspondante
include 'view/formulaire.view.php';

//include 'view/formulaire_remanant.view.php';





