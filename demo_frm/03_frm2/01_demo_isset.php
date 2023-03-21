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
   <form action="01_trait_demo_isset.php" method="post">
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
   
 
</body>

</html>
