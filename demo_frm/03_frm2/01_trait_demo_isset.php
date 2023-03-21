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
    
    if(!isset($_POST['v_frm_identite']))
    {    
        
       echo '<p>','Accès interdit','</p>';
       header('location:01_demo_isset.php');
       
   }
    else
    {
        echo '<p>',$_POST['v_prenom'],'</p>';
        //le nom est obligatoire
        if(!empty($_POST['v_nom']))
            echo '<p>',$_POST['v_nom'],'</p>';
        else
            echo '<p>','le nom est obligatoire','</p>';
    }    
        
?>     
        
    
 
</body>

</html>
