<?php
$erreur=[];
$name="7Dupond";
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $erreur[] = "Only letters and white space allowed";
}
var_dump($erreur);
