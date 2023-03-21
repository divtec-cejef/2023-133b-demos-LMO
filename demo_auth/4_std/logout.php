<?php
/**
 * Created by PhpStorm.
 * User: type
 * Date: 29.09.2015
 * Time: 15:10
 */

session_start();

if(isset($_SESSION))
    session_destroy();

header("location:accueil.php");
exit;



?>
<!DOCTYPE html >
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="DCTERMS.creator" content="Prénom Nom" />
    <meta name="DCTERMS.subject" content="Thème" />
    <meta name="DCTERMS.created" content="aaaa-mm-jj" />
    <title>Exercices X</title>
</head>
<body>
<ul>
    <li><a href="accueil.php">accueil</a></li>
    <li><a href="prive.php">privé</a></li>
    <li><a href="login.php">login</a></li>
    <li><a href="logout.php">deconnexion</a></li>
</ul>


</body>
</html>