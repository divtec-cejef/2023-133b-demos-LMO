<?php
/**
 * Created by PhpStorm.
 * User: lmo
 * Date: 30.01.17
 * Time: 13:37
 */
?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="do_upload.php" method="post" name="form1"  enctype="multipart/form-data">
        <div>
            <label for="zch">Fichier:</label>
            <input name="image" type="file" id="zch"/>
        </div>
        <div>
            <button type="submit" name="Envoyer" value="upload">Envoyer</button>
        </div>
    </form>


</body>
</html>