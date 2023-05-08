<?php
// traitement


// traitement du formulaire si'il est envoyé
if(filter_input(INPUT_POST,'btnEnvoi') !== null){


    //champ obligatoire
    $val1 = filter_input(INPUT_POST, 'tbx1', FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($val1)){
        var_dump('erreur: champ obligatoire');
    } else{
        var_dump($val1);
    }


}
?>


<!--formulaire html-->
<!doctype html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!--l'action est sur la même page-->
<form action="" method="post">
    <p>
        <label for="tbx1">saisir un text *</label>
        <input type="text" name="tbx1"  id="tbx1">
    </p>


    <p>
        <button type="submit" id="btn" name="btnEnvoi" value="btnEnvoi">Envoyer</button>
    </p>

</form>
</body>
</html>