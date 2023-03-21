<!DOCTYPE html >
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="DCTERMS.creator" content="Prénom Nom"/>
    <meta name="DCTERMS.subject" content="Thème"/>
    <meta name="DCTERMS.created" content="aaaa-mm-jj"/>
    <title>demo tab</title>
</head>
<body>


<?php
// Création.
$tab = array(
        'responsable'     => 'Moi',
        'nbCollaborateur' => 11,
        'batiment'        => 'usine3',
        'avatar'          => 'avatar.png',
);
var_dump($tab);


// Syntaxe courte.
$tab2 = [
         'id'          => 1001,
         'nom'         => 'Jura',
         'abreviation' => 'JU',
];
var_dump($tab2);


// Ecrire dans le tableau.
$tab['batiment'] = 'Poudrière';
var_dump($tab);


// Lire un élément.
$idCanton=$tab2['id'];
echo $idCanton;


// Effacer un élément.
unset($tab2['abreviation']);
var_dump($tab2);

/**/
?>


<img src="<?php echo $tab['avatar']; ?>" alt="avatar"/>

</body>
</html>