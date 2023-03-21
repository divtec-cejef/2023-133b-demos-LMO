<?php

// intitalisation des variables
$nom = '';
$prenom='';
$message='';

// Vérifie l'envoi du formulaire
if(isset($_POST['v_frm_identite']))
{
    $prenom = $_POST['v_prenom'];

    //le nom est obligatoire
    if(!empty($_POST['v_nom']))
       $nom = $_POST['v_nom'];
    else
        $message = 'le nom est obligatoire';
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
   <form action="" method="post">
        <p>
            <label>Prénom : </label>
            <input type="text" name="v_prenom"
                   value="" />
        </p>
        <p>
            <label>Nom *: </label>
            <input type="text" name="v_nom"
                   value="" />
        </p>
        <p>
            <button type="submit" name="btnEnvoyer">Envoyer</button>
        </p>
        <input type="hidden" name="v_frm_identite" value="envoye">
    </form>

    <section>
        <p><?=$prenom ?></p>
        <p><?=$nom ?></p>
        <p><?=$message ?></p>
    </section>
   
 
</body>

</html>
