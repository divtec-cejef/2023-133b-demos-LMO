<?php
    setcookie('fruit[0]', 'pommes',(time() + (3600 * 24)) );
    setcookie('fruit[1]', 'fraise',(time() + (3600 * 24)) );
    setcookie('fruit[2]', 'orange',(time() + (3600 * 24)) );

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
  <a href="p4_tabCookie.php">tab</a>

    <?php
    foreach ($_COOKIE['fruit'] as $name => $value) {
      $name = htmlspecialchars($name);
      $value = htmlspecialchars($value);
      echo "<p>$name : $value </p>";
    }
    ?>
</body>
</html>