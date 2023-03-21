<?php
/**
 * Created by PhpStorm.
 * User: lmo
 * Date: 30.01.17
 * Time: 13:40
 */

$uneImage = '';
$res = move_uploaded_file($_FILES['image']['tmp_name'],'./img/'.$_FILES['image']['name']);
if ($res === true) {
    $uneImage = $_FILES['image']['name'];
}



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
<h2>Dans le $_POST:</h2>

<?php var_dump($_POST) ?>

<h2>Dans le $_FILE:</h2>


<?php var_dump($_FILES) ?>
<img src="<?php echo './img/'.$uneImage; ?>">
</body>
</html>
