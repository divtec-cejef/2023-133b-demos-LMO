<?php
//démarrer la session PHP
session_start();



$a= 'ciao';
$_SESSION['it']=$a;

var_dump($a);
var_dump($_SESSION);