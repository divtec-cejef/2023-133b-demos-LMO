<?php
/**
 * Upload de fichiers en PHP
 *
 * Cet exemple présente comment récupérer, contrôler, et sauvegarder sur le serveur
 * un fichier evoyé par un formulaire HTML.
 *
 * Ce script contrôle que le fichier envoyé :
 *  - ne dépasse pas les 2 Mo (2097152 octets)
 *  - soit une image au format 'jpg','jpeg', 'gif', 'png' ou 'svg'
 *  - affiche un message d'erreur même lorsque la taille du fichier dépasse le post_max_size serveur
 *
 * Si le fichier est valide :
 *   - on génére un nom de fichier unique. Ex : photo_5628c78d9d463.jpg
 *   - on le copie dans le dossier 'img'
 *   - on affiche un message de confirmation et l'image uploadée.
 *
 * En cas d'erreur : on affiche la liste des erreurs :
 *  - Fichier trop volumineux.
 *  - Choisir un fichier.
 *  - Erreur lors de l'envoi du fichier.
 *
 * @author Steve Fallet <steve.fallet@divtec.ch>
 * @copyright  Copyright (c) 2016 DIVTEC, Porrentruy, CH (http://www.divtec.ch)
 * @date 22 ocotobre 2015$
 */

//Initialisation des variables
$fileUploaded = false;
$errors = [];
$fileName = "";
$fileExtension = "";
$validExtensions = ['jpg','jpeg', 'gif', 'png', 'svg'];
$uploadDir =  __DIR__ . '/img/'; //Toujours utiliser un chemin absolu et non relatif

//Si un fichier est envoyé
if(isset($_FILES['photo'])) {

    //Si erreur lors de l'envoi (code d'erreur > 0)
    //http://php.net/manual/fr/features.file-upload.errors.php
    if ($_FILES['photo']['error']) {
        switch ($_FILES['photo']['error']) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                $errors[] = "Fichier trop volumineux.";
                break;
            case UPLOAD_ERR_NO_FILE:
                $errors[] = "Choisir un fichier.";
                break;
            default:
                $errors[] = "Erreur lors de l'envoi du fichier.";
                break;
        }
    }

    //Si envoi du fichier ok (code erreur == 0)
    if ($_FILES['photo']['error'] === UPLOAD_ERR_OK) {

        //Récupération de l'extension du fichier avec pathinf()
        //http://php.net/manual/fr/function.pathinfo.php
        $fileExtension = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));

        //Création d'un nom de fichier unique préfixé avec 'photo_'
        $fileName = uniqid('photo_') . '.' . $fileExtension;

        //Si fichier trop volumineux > 2 Mo
        if ($_FILES['photo']['size'] > 2097152 ) { //1048576 octets = 1 Mo, 2097152 octets = 2 Mo
            $errors[] = 'Fichier trop volumineux.';
        }

        //Si extension PAS valide
        if (!in_array($fileExtension, $validExtensions)) {
            $errors[] = 'Extension invalide.';
        }

        //Si fichier PAS une image. getimagesize() permet de s'assurer que le fichier est "réellement" une image.
            if(!getimagesize($_FILES['photo']['tmp_name'])) {
            $errors[] = "Ce fichier n'est pas une image !";
        }

        //Si PAS d'erreur, on copie le fichier
        if (!$errors) {
            //Note : En PHP, on précède l'appel d'une fonction avec '@' pour la rendre silencieuse : n'affiche pas les 'Warnings'
            if (@move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir.$fileName)) {
                $fileUploaded = true;
            } else {
                $errors[] = 'Copie du fichier impossible pour le moment';
            }
        }
    }
}

//Si fichier uploadé plus grand que post_max_size, $_FILES et $_POST sont vides ...
//http://ca2.php.net/manual/en/ini.core.php#ini.post-max-size
if(empty($_POST) AND empty($_FILES) AND isset($_GET['processed'])) {
    $errors[] = 'Fichier trop volumineux.';
}


?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Steve Fallet">

    <title>PHP: Upload de fichiers | Kode.ch</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="icon" href="/favicon.ico">
</head>
<body>
<h1><a href="<?= $_SERVER['PHP_SELF'] ?>">Upload de fichiers</a></h1>

<?php if ($fileUploaded) : ?>
    <div class="confirm-box">
        Fichier uploadé avec succès !
    </div>

    <div class="section-box txt-center">
        <img src="img/<?php echo $fileName ?>" alt="Image du fichier uploadé" class="img-thumbnail">
    </div>
<?php elseif ($errors) : ?>
    <?php foreach($errors as $error) : ?>
        <div class="error-box">
            <strong>Erreur!</strong> <?php echo $error ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<form action="?processed" class="form-inline" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="2097152"><!-- value est en octets -->
    <div>
        <label for="photo">Sélectionner une image :</label>
        <input class="form-control" id="photo" name="photo" type="file" />
    </div>
    <p>Le fichier doit faire maximum 2Mo et avoir un extension valide : jpg, jpeg, gif, png ou svg</p>

    <button class="bouton">Envoyer le fichier</button>
</form>

<footer>
    &copy;<?= date('Y') ?> <a href="mailto:steve.fallet@divtec.ch">Steve Fallet</a>
</footer>
<!-- DEBUG -->
<pre>$_POST = <?php print_r($_POST) ?>

    $_FILES = <?php print_r($_FILES) ?></pre>
<!-- FIN DEBUG -->
</body>
</html>