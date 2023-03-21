<?php
/**
 * Created by PhpStorm.
 * User: lmo
 * Date: 15.05.17
 * Time: 14:13
 */





define('FILES_DIR', __DIR__ . '/files/');



$files = scandir(FILES_DIR);

var_dump($files);
var_dump(filesize(FILES_DIR . $files[3]));

$fileToDelete = $files[count($files)-1];
echo $fileToDelete;

//$res = unlink('./files/'.$fileToDelete);

if($res) {
    echo '<br> effacement OK';
} else {
    echo "<br>pas d'effacement";
}



/**/