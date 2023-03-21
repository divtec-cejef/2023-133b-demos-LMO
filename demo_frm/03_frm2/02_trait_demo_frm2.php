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
       var_dump($_GET);
    ?>    
   <p>
       <?php echo 'Valeur sélectionnée dans la liste : ',$_GET['v_biere']; ?>
   </p>
   
   <p>
    <?php
       foreach( $_GET['v_choix'] as $cle => $valeur ){
        echo $cle,'-->---',$valeur,'<br />';
   }
   ?>
   </p>
   
   <p>
    <?php
       if(isset($_GET['v_etat_civil']))
            echo 'Etat civil : ',$_GET['v_etat_civil'],'<br />';
        else
            echo 'Etat civil : ','pas renseigné','<br />';
       echo 'Tranche d\'âge : ',$_GET['v_tranche_age'],'<br />';
    ?>  
   </p>
    
        
    
 
</body>

</html>
