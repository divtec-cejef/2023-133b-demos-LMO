<?php

$credential = [];

if (isset($_SERVER['PHP_AUTH_USER']) === false) {
    header('WWW-Authenticate: Basic realm="Veuillez vous identifier pour continuer"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Texte utilisé si le visiteur utilise le bouton d\'annulation';
    exit;
}
else {
   $credential['userName'] = $_SERVER['PHP_AUTH_USER'];
   $credential['userPwd'] = $_SERVER['PHP_AUTH_PW'];

}
?>


<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Titre du document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/knacss-unminified.css" media="all">

</head>
<body>

<?php
    var_dump($credential);

?>

</body>
</html>
