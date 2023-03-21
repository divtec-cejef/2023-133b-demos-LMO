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
   <form action="02_trait_demo_frm2.php" method="get">
        <p>
            <select name="v_biere">
                <option value="1">blonde </option>
                <option value="2" selected="selected">brune </option>
                <option value="3">rousse </option>
            </select>
        
        </p>
        <p>    
            <label>Pomme </label>
            <input type="checkbox" name="v_choix[]" value="pomme"/>
            <label>Orange </label>
            <input type="checkbox" name="v_choix[]" value="orange" />
            <label>Fraises </label>
            <input type="checkbox" name="v_choix[]" value="fraise" checked="checked" />
            <label>Kiwi </label>
            <input type="checkbox" name="v_choix[]" value="kiwi" />
           
        </p> 
        
        <p>Etat civil :
            <label>marié(e)</label>
            <input type="radio" name="v_etat_civil" value="1"/>
            <label>non marié(e)</label>
            <input type="radio" name="v_etat_civil" value="2" />
        </p>
        <p>Tranche d'âge :
            <label>mineur(e)</label>
            <input type="radio" name="v_tranche_age" value="1" checked/>
            <label>majeur(e)</label>
            <input type="radio" name="v_tranche_age" value="2" />
            <label>retraité(e)</label>
            <input type="radio" name="v_tranche_age" value="3"/>
        </p>
        <p>
            <button type="submit" value="tesqui">Envoyer</button>
            <input type="hidden" name="v_frm_identite" value="envoye" />
        </p>
    </form>
   
 
</body>

</html>
