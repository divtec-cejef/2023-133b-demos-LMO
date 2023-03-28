<?php


/*
// Syntaxe courte.
$tab2 = [
    'id'          => 1001,
    'nom'         => 'Jura',
    'abreviation' => 'JU',
    'Delémont'
];

$tab2[10]=2800;

var_dump($tab2);
var_dump($tab2[0]);

*/

$cars2 = [
    [
        "marque" => "Volvo",
        "profondeur" => 22,
        "hauteur" => 18
    ],
    [
        "marque" => "BMW",
        "profondeur" => 15,
        "hauteur" => 13
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
var_dump($cars2);


//lecture et écriture
echo $cars2[0]['marque'];

$cars2[0]['marque']="Mazda";
var_dump( $cars2[0]['marque']);


//ajout d'une ligne
$cars2[]= [
    "marque" => "Tesla",
    "profondeur" => 17,
    "hauteur" => 18
];
var_dump($cars2);

foreach ($cars2 as $car){
    //var_dump($car);
    var_dump($car['marque']);
}

foreach ($cars2 as $car){
    //var_dump($car);
   foreach ($car as $value){
       var_dump($value);
   }
}

