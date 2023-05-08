<?php
// traitement


// traitement du formulaire si'il est envoyé
if(filter_input(INPUT_POST,'btnEnvoi') !== null){




    //champ radio
    $val3 = filter_input(INPUT_POST, 'radio1', FILTER_SANITIZE_SPECIAL_CHARS);
    if(is_null($val3)){
        var_dump('erreur: saisir une valeur radio');
    } else{
        var_dump($val3);
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
        oui <input type="radio" name="radio1" value="valRadio1_oui">
        non <input type="radio" name="radio1" value="valRadio1_non">

    </p>

   <!--autre groupe radio-->



    <p>
        <button type="submit" id="btn" name="btnEnvoi" value="btnEnvoi">Envoyer</button>
    </p>

</form>
</body>
</html>