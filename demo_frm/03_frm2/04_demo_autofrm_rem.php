<?php
    $message = '';
    $afficheForm = true;
    $errors = [];

    //Si le formulaire à été envoyé.
    if(isset($_POST['v_frm_identite']))
    {
        // Récupération et nettoyage des entrée.
        $leNom = trim(strip_tags($_POST['v_nom']));
        $lePrenom = trim(strip_tags($_POST['v_prenom']));
        // Le nom est obligatoire.
        if(empty($leNom))
        {
            $errors['nom']='ATTENTION le champ nom est obligatoire';
        }
        // Le prenom est obligatoire.
        if(empty($lePrenom))
        {
            $errors['prenom']='ATTENTION le champ prenom est obligatoire';
        }
        // Si les champs son remplis.
        if (!empty ($leNom) && !empty ($lePrenom)) {
            $message = '<p>Bonjour '. $lePrenom . ' ' . $leNom .'</p>';
            $afficheForm=false;
        }
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <p>
            <label>Prénom *: </label>
            <input type="text" name="v_prenom"
                   value="<?php
                            if (!empty ($lePrenom))
                                echo $lePrenom;
                          ?>"
        </p>
        <p>
            <label>Nom *: </label>
            <input type="text" name="v_nom"
                   value="<?php
                            if (!empty ($leNom))
                                echo $leNom;
                          ?>"
        </p>
        <p>
            <button type="submit">Envoyer</button>
            <input type="hidden" name="v_frm_identite" value="envoye"
        </p>
    </form>
    <ul>
        <?php foreach ($errors as $key => $value) :?>
            <li><?php echo $value; ?></li>
        <?php endforeach;?>
    </ul>

    <?php echo $message ?>

</body>

</html>
