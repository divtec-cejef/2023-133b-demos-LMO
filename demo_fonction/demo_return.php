<?php
function multiplie ($nb1, $nb2) {
    $resultat = ($nb1 * $nb2);
    // On peut aussi écrire directement return $nb1 *$nb2.
    return $resultat;
}

// Exemple d'appel.
$val1 = 15;
$val2 = 3;
// 15* 3 = 45.
echo $val1, ' * ', $val2, ' = ', multiplie ($val1, $val2);
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
<?php
// Appel de la fonction.
    affiche();
?>
</body>
</html>