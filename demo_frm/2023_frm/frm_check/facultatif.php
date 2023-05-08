<?php
// traitement


// traitement du formulaire si'il est envoyé
if(filter_input(INPUT_POST,'btnEnvoi') !== null){




    //champ facutatif
    $val2 = filter_input(INPUT_POST, 'tbx2', FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($val1)) {
        $val2 = " valeur par défaut";
    }
    var_dump($val2);



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
        <label for="tbx2">saisir un text</label>
        <input type="text" name="tbx2"  id="tbx1">
    </p>



    <p>
        <button type="submit" id="btn" name="btnEnvoi" value="btnEnvoi">Envoyer</button>
    </p>

</form>
</body>
</html>