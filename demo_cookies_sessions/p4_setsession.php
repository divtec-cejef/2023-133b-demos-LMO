<?php

    session_start();
    if (isset($_SESSION['count']) === false) {
        $_SESSION['count'] = 0;
        //header("'refresh:5; url=p41_setsession.php");
    } else {
        $_SESSION['count']++;
    }

    $_SESSION['nom'] = 'une classe';
?>
<!DOCTYPE html >
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="DCTERMS.creator" content="Laurent Moine" />
  <meta name="DCTERMS.subject" content="Thème" />
  <meta name="DCTERMS.created" content="aaaa-mm-jj" />
  <title>demo 06 </title>
</head>
<body>
    <h1>Affectation</h1>
    <?php
    echo 'compteur: ',$_SESSION['count'];
    var_dump($_SESSION);
    ?>
    <p>
        <a href="./p41_setsession.php ">Autre affectation de la session</a>
    </p>
    
    <p>
        <a href="./p5_delsession.php ">Effacer la session</a>
    </p>
</body>
</html>
