<?php
/**
 * Created by PhpStorm.
 * User: lmo
 * Date: 14.03.17
 * Time: 09:22
 */

function pathUrl($dir = __DIR__){
    $root = "";
    $dir = str_replace('\\', '/', realpath($dir));

    //HTTPS or HTTP
    $root .= !empty($_SERVER['HTTPS']) ? 'https' : 'http';

    //HOST
    $root .= '://' . $_SERVER['HTTP_HOST'];

    //ALIAS
    if(!empty($_SERVER['CONTEXT_PREFIX'])) {
        $root .= $_SERVER['CONTEXT_PREFIX'];
        $root .= substr($dir, strlen($_SERVER[ 'CONTEXT_DOCUMENT_ROOT' ]));
    } else {
        $root .= substr($dir, strlen($_SERVER[ 'DOCUMENT_ROOT' ]));
    }

    $root .= '/';

    return $root;
}



//DIRs
define('FILE_DIR', __FILE__ );
define('ROOT_DIR', __DIR__ . '/../');
define('IMG_DIR', ROOT_DIR . 'img/');
define('VIGNETTE_DIR', IMG_DIR . 'vignette/');

//URLs
define('ROOT_URL', 'http://localhost/w3/m133b/demo/demo_chemin/');
define('IMG_URL', ROOT_URL . 'img/');
define('VIGNETTE_URL', IMG_URL . 'vignette/');

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
<p><?php echo FILE_DIR; ?></p>
<p><?php echo ROOT_DIR; ?></p>
<p><?php echo IMG_DIR; ?></p>
<p><?php echo VIGNETTE_DIR; ?></p>


<hr>

<p><?php echo ROOT_URL; ?></p>
<p><?php echo IMG_URL; ?></p>
<p><?php echo VIGNETTE_URL; ?></p>


<a href="<?php echo IMG_URL.'chat_800_600.jpg'  ?>">
    <img src="<?php echo VIGNETTE_URL.'chat_100_75.jpg' ?>" alt="chat 1" >
</a>

<p><?php // echo pathUrl(ROOT_DIR); ?></p>

<?php var_dump($_SERVER); ?>

</body>
</html>
