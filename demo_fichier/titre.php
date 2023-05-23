<?php
/**
 * Created by PhpStorm.
 * User: lmo
 * Date: 22.05.17
 * Time: 15:30
 */

//Initialiation du portfolio
$titres  = array();
/*
$titres[] = '-';
$titres[] = 'Monsieur';
$titres[] = 'Madame';
$titres[] = 'Me';
$titres[] = 'Dr';
*/

/*
//lecture depuis un fichier txt
$titres = file('./data/titre.txt');
var_dump($titres);
*/



//lecture d'un fichier JSON
/*
$j = file_get_contents('./data/titre.json');
$tj = json_decode($j);
var_dump($tj);

*/


/*
// lecture d'un enregistrement au format JSON retourné dans un tableau associatif
$t= file_get_contents('./data/articles.json');
$tj = json_decode($t,true);
var_dump($tj);
*/


/*
foreach ($tj as $utj){
    //var_dump($utj);
    echo $utj.'-';

}
*/


$tj=[];
$tj[]=['id' => 200, 'titre' => 'un chien en hiver', 'image'=> '200.jpg'];
$tj[]=['id' => 300, 'titre' => 'Loupiot', 'image'=> '00.jpg'];


// conversion d'un tableau en JSON
$tout=json_encode($tj);
/**/




// écriture de la chaîne JSON dans le fichier
var_dump(file_put_contents('./data/articles.json',$tout));
/**/
