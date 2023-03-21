<?php


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
  <a href="p1_setcookie.php">SET</a>
  <a href="p2_updatecookie.php">UPDATE</a>
  <a href="p3_delcookie.php">DELETE</a>
    <?php
        if( isset($_COOKIE['CEJEF']))
        {
            $var = $_COOKIE['CEJEF'];
            var_dump($var);
            setcookie('CEJEF', '', -1);
        }
        else
            echo '… le cookie CEJEF n\'existe pas';
    ?>
</body>
</html>