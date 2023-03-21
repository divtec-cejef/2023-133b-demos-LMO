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
	
<?php
    
    
    $affiche_form=true;
    
    //si le formulaire à été envoyé
    if(isset($_POST['v_frm_identite']))
    {    
        //le nom est obligatoire
        if(empty($_POST['v_nom']))
        {?>
            <ul><li>ATTENTION le champ nom est obligatoire</li></ul>   
        <?php    
        }
        //le prenom est obligatoire
        if(empty($_POST['v_prenom']))
        {?>
            <ul><li>ATTENTION le champ prenom est obligatoire</li></ul>   
        <?php    
        }
        //si les champs son remplis
        if (!empty ($_POST['v_nom']) && !empty ($_POST['v_prenom'])) {
            echo '<p>Bonjour ', $_POST['v_prenom'], ' ', $_POST['v_nom'], '</p>';
            $affiche_form=false;
        }
    }
    if($affiche_form)
    {    
    ?>      
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <p>
                <label>Prénom *: </label>
                <input type="text" name="v_prenom"
                       value="<?php
                                if (!empty ($_POST['v_prenom']))
                                    echo $_POST['v_prenom'];
                              ?>"
            </p>
            <p>
                <label>Nom *: </label>
                <input type="text" name="v_nom"
                       value="<?php
                                if (!empty ($_POST['v_nom']))
                                    echo $_POST['v_nom'];
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
   
 
</body>

</html>
