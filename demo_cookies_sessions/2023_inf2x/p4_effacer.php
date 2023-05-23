<?php
//démarrer la session PHP
session_start();



//efface le cookie sur le navigateur
setcookie (session_id(), "", time() - 3600);



//efface le fichier de session sur le serveur
session_destroy();
session_write_close();
//header('location:p1_fr.php');


?>




