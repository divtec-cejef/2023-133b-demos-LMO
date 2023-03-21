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

define('IMG_URL', ROOT_URL.'img/');


//DIRs
define('ROOT_DIR', __DIR__ . '/../');
define('IMG_DIR', ROOT_DIR . 'img/');
define('PORTFOLIO_DIR', IMG_DIR . 'portfolio/');


define('MODEL_DIR', ROOT_DIR . 'model/');