<?php
//démarrer la session utilisateur
session_start();
$a='salut';

$_SESSION['fr']=$a;
var_dump($_SESSION);

?>
<a href="p3_recap.php">afficher la session</a>
<a href="p4_effacer.php">effacer la session</a>
