<?php
    session_start();
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    }
    else
    {
        $_SESSION['count']++;
    } 
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
    <h1> P41 Autre affectation</h1>
    <?php
    echo 'compteur: ',$_SESSION['count'];
         
    ?>
    <p>
        <a href="./p4_setsession.php ">Affecter la  session</a>
    </p>
</body>
</html>