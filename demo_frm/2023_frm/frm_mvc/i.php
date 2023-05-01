<?php
/**
 * Created by PhpStorm.
 * User: moinlau
 * Date: 08.05.2018
 * Time: 09:48
 */


// les contrôleurs accèdent à la config du site
require 'inc/utils.php';

// accès au modèle
require 'model/gens.model.php';

// récupère les données
$datas = getAll();


// appel de la vue correspondante
include 'view/accueil.view.php';

r($datas);