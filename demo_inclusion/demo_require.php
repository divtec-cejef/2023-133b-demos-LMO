<?php
/**
 * Created by PhpStorm.
 * User: lolo
 * Date: 10.11.15
 * Time: 08:23
 */

require_once('./fonctions.inc.php');
$phrase = 'une jolie phrase';
define('MOTIF', '*-*');
?>


<!DOCTYPE html >
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="DCTERMS.creator" content="Laurent Moine"/>
    <meta name="DCTERMS.subject" content="démos"/>
    <meta name="DCTERMS.created" content="2015-mm-jj"/>
    <title>require</title>
</head>
<body>
<p>
    <?php echo $phrase; ?>
</p>

<p>
    <?php echo faireJoliSubtile($phrase, MOTIF); ?>
</p>

</body>
</html>