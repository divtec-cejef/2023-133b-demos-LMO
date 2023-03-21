<?php
/**
 * Created by PhpStorm.
 * User: type
 * Date: 29.09.2015
 * Time: 15:10
 */

session_start();

// Force l'affichage du formulaire d'authentification.
$estAutherntifie=false;
$erreur= [];

// Si le formulaire à été envoyé.
if(isset($_POST['v_frm_identite']) === true)
{
    // Récupère et nettoie les entrées du formulaire.
    $nom = filter_input(INPUT_POST,'v_nom',FILTER_SANITIZE_STRING);
    $mdp = filter_input(INPUT_POST,'v_mdp',FILTER_UNSAFE_RAW);

    // Le nom est obligatoire.
    if (empty($nom) === true) {
        $erreur[] = 'ATTENTION le champ nom est obligatoire';
    }

    // Le mot de passe est obligatoire.
    if (empty($mdp) === true) {
        $erreur[] = 'ATTENTION le champ mot de passe est obligatoire';
    }

    // Si les champs son remplis.
    if ((empty($nom) === false) && (empty($mdp) === false)) {
        // Couples identifiant / mots de passe.
        $authentificationsValides = [];
        $identifiants = file_get_contents('htpwdjson');
        $authentificationsValides = json_decode($identifiants, true);

        // Récupère les nom d'utilisateurs dans un tableau.
        $identifiantsValides = array_keys($authentificationsValides);

        // Vérifie les données saisies avec les valeurs valides.
        if (in_array($nom, $identifiantsValides) === true) {
            if ($mdp === $authentificationsValides[$nom]) {
                $estAutherntifie = true;
            }
        }

        // Teste la validité de l'auth..
        if ($estAutherntifie === true) {
            // Incription des données de l'utilisateur dans l'application.
            $_SESSION['nom'] = $nom;
            // Redirection possible.
        } else {
            $erreur[] = 'ATTENTION le nom ou le mot de passe est faux';
        }
    }//end if
}
?>
<!DOCTYPE html >
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="DCTERMS.creator" content="Prénom Nom" />
    <meta name="DCTERMS.subject" content="Thème" />
    <meta name="DCTERMS.created" content="aaaa-mm-jj" />
    <title>Exercices X</title>
</head>
<body>
<ul>
    <li><a href="accueil.php">accueil</a></li>
    <li><a href="prive.php">privé</a></li>
    <li><a href="login.php">login</a></li>
    <li><a href="logout.php">deconnexion</a></li>
</ul>

<ul>
    <?php foreach ($erreur as $er) : ?>
        <li><?php echo $er; ?></li>
    <?php endforeach; ?>
</ul>

<?php
// Affichage du formulaire si pas encore authentifié.
if(!$estAutherntifie)
{
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <p>
        <label>Nom *: </label>
        <input type="text" name="v_nom"
               value="<?php
               if (!empty ($_POST['v_nom']))
                   echo filter_input(INPUT_POST,'v_nom',FILTER_SANITIZE_STRING);
               ?>"
    </p>
    <p>
        <label>Mot de passe *: </label>
        <input type="text" name="v_mdp"
               value="<?php
               if (!empty ($_POST['v_mdp']))
                   echo filter_input(INPUT_POST,'v_mdp',FILTER_SANITIZE_STRING);
               ?>"
    </p>
    <p>
        <button type="submit">Envoyer</button>
        <input type="hidden" name="v_frm_identite" value="envoye"
    </p>
</form>
<?php

} //if
?>

<p>utilisateur: <?php echo $_SESSION['nom'];  ?></p>


</body>
</html>