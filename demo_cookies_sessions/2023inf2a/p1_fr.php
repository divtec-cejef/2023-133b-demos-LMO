<?php
//démarrer la session PHP
session_start();


$a = "bonjour";
$_SESSION['fr']=$a;

var_dump($a);
var_dump($_SESSION);

?>
<a href="p3_recap.php">afficher la session</a>
<a href="p4_effacer.php">effacer la session</a>
