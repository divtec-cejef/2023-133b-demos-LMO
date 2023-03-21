<?php
// Définir l'encodage.
header('Content-Type: text/html; charset=utf-8');

$a = 1234;  // Nombre entier en base décimale soit 1234.
$a = 01234; // En base octale, préfixé 0 (zéro) soit 668 en décimale.
$a = 0x1234;// En base hexa, préfixé 0x soit 4660 en décimale.
//echo $a;
//echo '<hr>';



$a = 1.234;
$a = 1.234e3; // Notation scientifique, 1.234*10^3 = 1234 en décimal.
//echo $a;





$variable = 'PHP le meilleur !';
echo '1) Et l\'ami dit " = $variable"\n<br> ';

echo "2) Et l'ami dit \" = $variable \" \n<br> ";
// Autre possibilité.

echo '3) Contenu de la variable = ', $variable, '<br>';


$a = 1.234;
var_dump($a);
$a = array('a', 'bb', 'ccc');
var_dump($a);

$a = array('a', 'bb', 'ccc');
echo '<pre>';
print_r($a);
echo '</pre>';
