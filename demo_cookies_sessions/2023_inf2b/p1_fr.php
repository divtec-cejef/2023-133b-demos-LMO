<?php
//démarrer la session utilisateur
session_start();
$a='salut';

$_SESSION['fr']=$a;
var_dump($_SESSION);