<?php
/**
 * Created by PhpStorm.
 * User: moinlau
 * Date: 08.05.2018
 * Time: 09:48
 */


// les contrôleurs accèdent à la config du site
require_once 'inc/config.php';

// accès au modèle
require_once MODEL_DIR . 'gens.model.php';

$datas = getAll();


// appel de la vue corresppondante
include VIEW_DIR . 'accueil.view.php';

