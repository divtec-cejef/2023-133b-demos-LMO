<?php
function test ($p){
    echo 'debut test: ', $p, '<br />';
    $p = 99;
    echo 'fin test: ', $p, '<br />';
}

$var = 11;

// Affiche : 11.
echo 'debut programme: ', $var, '<br />';

// Affiche 11.
test ($var); // Affiche 11 puis 99
echo 'fin programme: ', $var, '<br />';



function testRef (&$p){
    echo 'debut test: ', $p, '<br />';
    $p = 99;
    echo 'fin test: ', $p, '<br />';
}

$var = 11;

// Affiche : 11.
echo 'debut programme: ', $var, '<br />';

// Affiche 11.
testRef($var); // Affiche 11 puis 99
echo 'fin programme: ', $var, '<br />';



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