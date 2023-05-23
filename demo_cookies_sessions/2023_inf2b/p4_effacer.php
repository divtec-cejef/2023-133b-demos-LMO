<?php
//démarrer la session PHP
session_start();



//efface le cookie sur le navigateur
$numeroSession = session_id();
setcookie ($numeroSession, "", time() - 3600);



//efface le fichier de session sur le serveur
session_destroy();
session_write_close();
//header('location:p1_fr.php');


?>




