<?php
//démarrer la session utilisateur
session_start();
$a='ciao';

$_SESSION['it']=$a;
var_dump($_SESSION);