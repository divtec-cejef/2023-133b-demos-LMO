<!DOCTYPE html >
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="DCTERMS.creator" content="Prénom Nom"/>
    <meta name="DCTERMS.subject" content="Thème"/>
    <meta name="DCTERMS.created" content="aaaa-mm-jj"/>
    <title>demo tab</title>
</head>
<body>
<?php
//création
$tab = array(45, 10, 12.50);
$tab2 = [10, 20, 30];


//affichage technique
echo '$tab','<br>';
var_dump($tab);

echo '$tab2','<br>';
var_dump($tab2);

echo '$tab','<br>';
echo "<pre>";
print_r($tab);
echo "</pre>";

//ajout d'un élément à la suite

$tab[] = "nouveau";
var_dump($tab);

//affection
$tab[0] = 123;
var_dump($tab);

$tab[7] = 123;
var_dump($tab[7]);

//accès à une case inexistante
var_dump($tab[8]);


//lecture
$mon_nombre = $tab[2];
echo 'le nombre est: ', $mon_nombre, '<br/>';


?>
</body>
</html>

