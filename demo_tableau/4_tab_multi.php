<!DOCTYPE html >
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="DCTERMS.creator" content="Prénom Nom"/>
    <meta name="DCTERMS.subject" content="Thème"/>
    <meta name="DCTERMS.created" content="aaaa-mm-jj"/>
    <title>demo tab multi</title>
</head>
<body>


<?php

    //création
    $car_one=["Volvo", 22, 18];
    $car_two=["BMW",15,13];
    $cars3=[
        "auto 1"=>$car_one,
        "auto 2"=>$car_two
    ];
    var_dump($cars3);



    $cars = array(
        array("Volvo", 22, 18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,18)
    );
    var_dump($cars);


    $cars2=[
        "auto 1"=>["Volvo", 22, 18],
        "auto 2"=>["BMW",15,13],
        "auto 3"=>["Saab",5,2],
        "auto 4"=>["Land Rover",17,18]
    ];
    var_dump($cars2);


    //lecture et écriture
    echo $cars2["auto 1"][0];

    $cars2["auto 1"][0]="Mazda";
    echo $cars2["auto 1"][0];


    //ajout d'une ligne
    $cars2["auto 5"]=["Peugeot", 54,36];
    var_dump($cars2);
?>



</body>
</html>
