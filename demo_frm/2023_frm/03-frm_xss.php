<?php
// traitement
$text = "---";



// traitement du formulaire si'il est envoyé
if(isset($_GET['btnEnvoi'])){
    echo "get <br>";
    var_dump($_GET);


    //sans la protection
    $text = $_GET['tbx1'];

    //avec la protection
    //$text=filter_input(INPUT_GET, 'tbx1', FILTER_SANITIZE_SPECIAL_CHARS);

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
<form action="" method="get">
    <p>
        <label for="tbx1">saisir un text</label>
        <input type="text" name="tbx1"  id="tbx1">
    </p>
    <p>
        <button type="submit" id="btn" name="btnEnvoi" value="btnEnvoi">Envoyer</button>
    </p>
</form>

<p>le texte est <?php echo $text ?></p>

<hr>
Text à saisir dans le formulaire : <?php echo htmlentities("<script>alert('plouc');</script>")?> <br>
Text à saisir dans le formulaire : <?php echo htmlentities("<script>window.location.replace(\"http://www.w3schools.com\");</script>")?>
</body>
</html>