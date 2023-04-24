<?php
/**
 * Created by PhpStorm.
 * User: moinlau
 * Date: 08.05.2018
 * Time: 09:51
 */


function getAll(){
    $gens=[];
    $gens[]= ['nom' => 'bob', 'blaz' => 'le bricoleur'];
    $gens[]= ['nom' => 'marco', 'blaz' => 'le courageux'];
    $gens[]= ['nom' => 'pauline', 'blaz' => 'la maligne'];
  return $gens;
}