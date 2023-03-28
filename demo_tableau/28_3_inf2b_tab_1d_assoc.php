<?php

// Syntaxe courte.
/*$tab2 = [
    'id'          => 1001,
    'nom'         => 'Jura',
    'abreviation' => 'JU',
    'Delémont'
];
$tab2[10]=2800;

var_dump($tab2);

foreach ($tab2 as $value):
    var_dump($value);
endforeach;

foreach ($tab2 as $id => $value):
    /*var_dump($cle);
    var_dump($value);*/
    //echo "<p>$id - $value </p>";

//endforeach;*/


$cars = [
    [
        "marque"      => "Volvo",
        "profondeur"  => 22,
        "hauteur"     => 18
    ],
    [
        "marque"      => "BMW",
        "profondeur"  => 15,
        "hauteur"     => 13
    ],
    [
        "marque" => "Saab",
        "profondeur" => 5,
        "hauteur" => 2
    ],
    [
        "marque" => "Land Rover",
        "profondeur" => 17,
        "hauteur" => 18
    ]

];

var_dump($cars);

//lecture et écriture
var_dump( $cars[0]); // affiche une voiture
var_dump( $cars[3]['marque']); // affiche la marque de la voiture 3


//ajout d'une ligne
$cars[]= [
    "marque" => "Tesla",
    "profondeur" => 17,
    "hauteur" => 18
];
var_dump($cars);

//parcourir
foreach ($cars as $car) {
    var_dump($car);
    //var_dump($car['marque']);
}

foreach ($cars as $car){
    //var_dump($car);
    foreach ($car as $value){
        var_dump($value);
    }
}