<?php
/**
 * Created by PhpStorm.
 * User: type
 * Date: 29.09.2015
 * Time: 15:10
 */

session_start();

//definir l'encodage
header('Content-Type: text/html; charset=utf-8');


if(!isset($_SESSION['niveau'])){

    //header("location:accueil.php");
    header("refresh:3;url=accueil.php");
    echo "pas authentifié !";
    exit;
}

$niveau_min=2;
if($_SESSION['niveau']>$niveau_min){
    //header("location:accueil.php");
    header("refresh:3;url=accueil.php");
    echo "pas le niveau !";
    exit;
}

$id=$_SESSION['id'];
$nom=$_SESSION['nom'];
$niveau=$_SESSION['niveau'];





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
    <h1>page privé</h1>
    <p>page seulement pour accès 2 au minimum</p>

    <ul>
        <li><a href="accueil.php">accueil</a></li>
        <li><a href="prive.php">privé</a></li>
        <li><a href="login.php">login</a></li>
        <li><a href="logout.php">deconnexion</a></li>
    </ul>

    <p>utilisateur: <?php echo $nom;  ?></p>
    <p>niveau: <?php echo $niveau;  ?></p>


</body>
</html>