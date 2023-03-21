<?php
    session_start();
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
    <?php
    if (isset($_SESSION['count']) === true) {
        echo 'Avant effacement: ',$_SESSION['count'],'<br/>';

        //On supprime les variables de session en vidant la superglobale $_SESSION
        //Ne jamais utiliser unset($_SESSION) car vous détruiriez la superglobale
        $_SESSION = [];

        //Supprime le cokiee créer par la navigateur pour stoquer l'ID de session
        $n = session_name();
        setcookie($n, '', time() - 3600);

        // Suprimme la session elle-même.
        session_destroy();



        echo 'Après effacement : ', $_SESSION['count'],'<br/>';
    } else {
        echo 'La session n\'existe pas';
    }
    ?>
    
    <p>
        <a href="./p4_setsession.php ">Affecter la  session</a>
    </p>
</body>
</html>