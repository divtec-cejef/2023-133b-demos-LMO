<?php
/**
 * Created by PhpStorm.
 * User: moinlau
 * Date: 08.05.2018
 * Time: 09:48
 */


// les contrôleurs accèdent à la config du site
require 'inc/config.php';

// accès au modèle
require './model/gens.model.php';

//utilise les données du modèle
$datas = getAll();


// présent les données la vue corresppondante
include './view/accueil.view.php';

