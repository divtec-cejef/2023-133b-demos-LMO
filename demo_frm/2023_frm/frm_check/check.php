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

    //champ facutatif
    $val2 = filter_input(INPUT_POST, 'tbx2', FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($val1)) {
        $val2 = " valeur par défaut";
    }
    var_dump($val2);


    //champ radio
    $val3 = filter_input(INPUT_POST, 'radio1', FILTER_SANITIZE_SPECIAL_CHARS);
    if(is_null($val3)){
        var_dump('erreur: saisir une valeur radio');
    } else{
        var_dump($val3);
    }

    //champ case à cocher
    $val4 = filter_input(INPUT_POST, 'chk1');
    var_dump($val4);

    //champ multi case à cocher
    if(isset($_POST['chk2'])) {
        var_dump($_POST['chk2']);
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
        <label for="tbx2">saisir un text</label>
        <input type="text" name="tbx2"  id="tbx1">
    </p>

    <p>
        oui <input type="radio" name="radio1" value="valRadio1_oui">
        non <input type="radio" name="radio1" value="valRadio1_non">

    </p>

    <p>
        choix1 <input type="checkbox" name="chk1" value="valchk1">
        <fieldset>
            choix2.1 <input type="checkbox" name="chk2[]" value="valchk2.1">
            choix2.2 <input type="checkbox" name="chk2[]" value="valchk2.2">
        </fieldset>

    </p>

    <p>
        <button type="submit" id="btn" name="btnEnvoi" value="btnEnvoi">Envoyer</button>
    </p>

</form>
</body>
</html>