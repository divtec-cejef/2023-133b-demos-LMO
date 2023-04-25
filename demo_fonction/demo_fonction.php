<?php
function affiche() {
    echo 'Hello world!', '<br>';
}



function testVarGlobale(){
    global $gVar;
    $gVar = 17;

    // Syntaxe altenative. Remplace les 2 ligne ci-dessus.
    //$GLOBALS['gVar'] = 20;
}

// Initialisation de la variable globale.
$gVar = 11;

// 11.
echo 'debut programme ', $gVar, '<br />';

testVarGlobale();

// 17.
echo 'fin programme ', $gVar, '<br />';
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