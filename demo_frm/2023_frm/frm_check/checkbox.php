<?php
// traitement


// traitement du formulaire si'il est envoyé
if(filter_input(INPUT_POST,'btnEnvoi') !== null){



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