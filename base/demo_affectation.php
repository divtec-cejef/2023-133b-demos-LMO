<?php
// Définir l'encodage.
header('Content-Type: text/html; charset=utf-8');

// Affecte la valeur entière 3 à $a.
$a = 3;

// Correspond à l'instruction $a = $a + 5.
$a += 5;

// Correspond à l'instruction $a = $a - 5.
$a -= 5;

// Correspond à l'instruction $a = $a * 5.
$a *= 5;

// Correspond à l'instruction $a = $a * 5.
$a /= 5;
echo $a;

$a = 'PHP';
// Correspond à l'instruction de concaténation $a = $a .'j'aime' .
$a .= ' j\'aime';
echo $a;

$a = true;

echo 'PHP';
echo '</br>';
// La virgule ',' permet de séparer les fragments de chaînes de caractères envoyés à echo.
echo 'PHP', ' le meilleur !';

$a = 'PHP';
$refA = &$a;
//echo $refA, ' est un langage de script...';


$a = 'PHP est un langage de script ';
$b = 'JS aussi...';
//echo $a.$b;

$a = 5;
// Assigne la valeur de $a à $b, puis incrémente $a.
$b = $a++;
//echo 'Valeur de $a: ', $a, ' valeur de $b: ', $b, '</br>';




$a = 5;
// Assigne la valeur de $a à $b, puis décrémente $a.
$b = $a--;
//echo 'Valeur de $a: ', $a, ' valeur de $b: ', $b, '</br>';


$a = 5;
// Incrémente $a puis sssigne la valeur de $a à $b.
$b = ++$a;
//echo 'Valeur de $a: ', $a, ' valeur de $b: ', $b, '</br>';


$a = 5;
// Décrémente $a puis sssigne la valeur de $a à $b.
$b = --$a;
//echo 'Valeur de $a: ', $a, ' valeur de $b: ', $b, '</br>';



