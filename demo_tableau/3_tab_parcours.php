<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


 <?php
 /**
  * fichier de démo de l'utilisation de tableaux.
  *
  * PHP version 5.6
  *
  * @category  PHP
  * @package   PHP_CodeSniffer
  * @author    Greg Sherwood <gsherwood@squiz.net>
  * @author    Marc McIntyre <mmcintyre@squiz.net>
  * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
  * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
  * @link      http://pear.php.net/package/PHP_CodeSniffer
  */

    // Création d'un tableau.
     $peintres = [
         'Picasso',
         'Van Gogh',
         'Rothko',
     ];

     // Affichage du contenu.
     $nbEle = count($peintres);
     for ($indice = 0; $indice < $nbEle; $indice++) {
          echo $peintres[$indice],'<br/>';
     }

    echo '<hr>';

    foreach ($peintres as $unPeintre) {
        echo $unPeintre,'<br/>';
    }

    echo '<br>';

    foreach ($peintres as $indice => $unPeintre) {
        echo $indice, ' - ', $unPeintre,'<br/>';
    }

    echo '<hr>';

     $tab2 = [
         'id'          => 1001,
         'nom'         => 'Jura',
         'abreviation' => 'JU',
         'Delémont'
     ];

     $tab2[10]=2800;

     foreach ($tab2 as $indice => $valeur) {
         echo $indice, ' - ', $valeur,'<br/>';
     }

 /*
     // Foreach sur tableau assoc.
     $garage = [
                'JU2296' => [
                             'Volvo',
                             22,
                             18,
                            ],
                'NE6789' => [
                             'BMW',
                             15,
                             13,
                            ],
                'GR4379' => [
                             'Saab',
                             5,
                             2,
                            ],
                'VS9666' => [
                             'Land Rover',
                             17,
                             18,
                            ],
     ];
     var_dump($garage);

     foreach ($garage as $imatriculation => $voiture) {
             echo '<h4>',$imatriculation, ':','</h4>';
         foreach ($voiture as $carctersitique => $valeur) {
             echo '<p>',$carctersitique, ': ',$valeur, '</p>';
         }
     }
 */
?>
 </body>
 </html>

