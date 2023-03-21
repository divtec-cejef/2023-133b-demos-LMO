<?php
// Definir l'encodage.
header('Content-Type: text/html; charset=utf-8');

// Couples identifiant / mots de passe.
$authentificationsValides = array ("mario" => "bros",
									"pac" => "man"
                                   );

// Récupère les nom d'utilisateurs dans un tableau.
$identifiantsValides = array_keys($authentificationsValides);

/*
    Récupère les données saisies dans le formulaires d'identifiaction
    généré suite à la levée du code 401 du serveur.
    Null si pas saisies
*/
$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];


// Vérifie les données saisies avec les valeurs valides.
$ok = false;
if (in_array($user, $identifiantsValides) === true) {
	if ($pass === $authentificationsValides[$user]) {
		$ok = true;
	}
}

// Génère la demande d'auhentifcation (réponse avec le code 401).
if ($ok === false) {
	header('WWW-Authenticate: Basic realm="Veuillez vous identifier, SVP"');
 	header('HTTP/1.0 401 Unauthorized');

 	// Cas d'annulation sur la popup du navigateur.
	die ('Acces Non autorisé');
}


?>
<!doctype html>
<html lang="fr">
<head>
		<meta charset="UTF-8">
		<title>Authentification HTTP</title>
</head>
<body>
	<div>
		<p><?php echo "Bienvenue $user"; ?></p>
		<p><?php echo "Bravo, vous êtes authentifié !"; ?></p>
	</div>
</body>
</html>