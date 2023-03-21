<?php

//Mode debug
const DEBUG_MODE = false;

if (DEBUG_MODE) {
    require_once 'vendors/php-ref-master/ref.php';
    //error_reporting(E_ALL & ~E_NOTICE);
    error_reporting(E_ALL);
    //http://php.net/manual/fr/function.error-reporting.php
} else {
    error_reporting(0);
}


//Données utilisateur
const USER_NAME = 'Paul Carbone';
define('USER_TITLE',    'Formateur');
define('USER_TEL',      '0041 79 422 22 22');
define('USER_EMAIL',    'paul.carbone@divtec.ch');
define('USER_FACEBOOK', 'paul.carbone');
define('USER_TWITTER',  'carbonic');

// URLs.
//define('ROOT_URL', 'http://localhost/w3/m133b/exercices/ex02/art-gallery-etape-2/');
const ROOT_URL = 'http://localhost/w3/m133b/exercices/ex03/art-gallery-etape-3/';
define('IMG_URL', ROOT_URL.'img/');
define('PORTFOLIO_URL', IMG_URL . 'portfolio/');
//const IMG_URL = ROOT_URL.'img/';


//DIRs
define('ROOT_DIR', __DIR__ . '/../');
define('IMG_DIR', ROOT_DIR . 'img/');
define('PORTFOLIO_DIR', IMG_DIR . 'portfolio/');

//Portfolio des réalisations
$portfolio  = array();

$portfolio[1] = array(
	'titre' 		=> 'Tableau le chiffre 1',
	'image' 		=> 'numbers-01.jpg',
	'description' 	=> 'Expérimentation de couleurs',
);

$portfolio[2] = array(
	'titre' 		=> 'Tableau le chiffre 2',
	'image' 		=> 'numbers-02.jpg',
    'description' 	=> 'Jeu de fondus',
);

$portfolio[6] = array(
	'titre' 		=> 'Tableau le chiffre 6',
	'image' 		=> 'numbers-06.jpg',
	'description' 	=> '80\'s style',
);

$portfolio[9] = array(
	'titre' 		=> 'Tableau le chiffre 9',
	'image' 		=> 'numbers-09.jpg',
	'description' 	=> 'Travail avec les pinceaux',
);

$portfolio[12] = array(
	'titre' 		=> 'Tableau le numéro 12',
	'image' 		=> 'numbers-12.jpg',
	'description' 	=> 'Répétition de formes',
);