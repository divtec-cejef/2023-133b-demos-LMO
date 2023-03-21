<?php
//accède à la session
session_start();


//simule la réception de l'adresse de courriel
$email = 'a@a.ch';

// ajoute une valeur à la session (rend disponible pour tout le site)
$_SESSION['email']=$email;


?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="prive.php">page privée</a>
</body>
</html>


