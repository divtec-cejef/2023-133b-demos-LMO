<?php
//démarrer la session PHP
session_start();


$a = "bonjour";
$_SESSION['fr']=$a;

var_dump($a);
var_dump($_SESSION);
