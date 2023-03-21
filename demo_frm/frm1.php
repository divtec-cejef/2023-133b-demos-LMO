<?php
/**
 * Created by PhpStorm.
 * User: lmo
 * Date: 10.02.17
 * Time: 15:35
 */



?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
</head>
<body>
    <h3>en get</h3>
    <form action="frm1.php" method="get">
        <label for="zNomFamille">Nom:</label>
        <input type="text" name="zNomFamille" id="zNomFamille"><br>

        <label for="zPrenom">Prénom:</label>
        <input type="text" name="zPrenom"><br>
        <button type="submit" name="btnEnvoi" value="btnEnvoi" id="btnEnvoi">Envoyer</button>
    </form>

    <hr>
    <h3>en post</h3>
    <form action="frm1.php" method="post">
        <label for="zNomFamille">Nom:</label>
        <input type="text" name="zNomFamille" id="zNomFamille"><br>

        <label for="zPrenom">Prénom:</label>
        <input type="text" name="zPrenom"><br>
        <button type="submit" name="btnEnvoi" value="btnEnvoi" id="btnEnvoi">Envoyer</button>
    </form>
    <hr>
    <?php var_dump($_GET);?>
    <?php var_dump($_POST);?>
    <?php echo 'nom en GET:', htmlspecialchars($_GET['zNomFamille']); ?> <br>
    <?php echo 'nom en GET:', htmlentities($_GET['zNomFamille']); ?><br>
    <?php echo 'nom en GET:', strip_tags($_GET['zNomFamille']); ?><br>

</body>
</html>
