<?php

$nb = 1000;

$tab= [
    'tom',
    'pol',
    'phil'
];

$nb = count($tab);
for($i=0; $i < $nb; $i++){
    echo '<p>', $tab[$i], '</p>';
}

echo 'bye';