<?php

// Syntaxe courte.
$tab2 = [
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
    echo "<p>$id - $value </p>";

endforeach;


