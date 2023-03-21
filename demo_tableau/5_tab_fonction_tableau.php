<?php
/**
 * Created by PhpStorm.
 * User: lmo
 * Date: 11.09.17
 * Time: 14:58
 */



function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
var_dump($b);


$a =[
   'nom' => 'Monnet ',
   'prenom' => ' Paul '
];

var_dump($a);
$b=array_map('trim',$a);
var_dump($b);