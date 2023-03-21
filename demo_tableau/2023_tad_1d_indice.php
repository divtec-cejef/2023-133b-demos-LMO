<?php



//décalaration
$tab1 = [
    10,
    20.5,
    'salut'
];


//ajout d'une case
$tab1[3] = true;
$tab1[] = 134;



//initialiser un tableau vide
$tab2=[];


//écriture dans une case
$tab1[3] = "remplacemnt";

//lire une case
var_dump($tab1[2]);

//affichage technique
var_dump($tab1);
var_dump($tab2);

//parcours d'un tableau
for ($i=0;$i<count($tab1);$i++):
    var_dump($tab1[$i]);
endfor;

