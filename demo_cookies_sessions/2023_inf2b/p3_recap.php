<?php
//démarrer la session PHP
session_start();
?>

<h1>liste des valeurs dans la session</h1>

<?php
if(isset($_SESSION['fr'])):
    echo $_SESSION['fr'];
endif;


// ressources : https://blog.smarchal.com/operateur-ternaire-php
echo isset($_SESSION['fr']) ? $_SESSION['fr'] : "rien";

echo $_SESSION['fr'] ?? "rien";


?>

<a href="p4_effacer.php">effacer la session</a>


