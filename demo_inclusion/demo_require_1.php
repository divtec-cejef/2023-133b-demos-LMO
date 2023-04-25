<?php
/**
 * Created by PhpStorm.
 * User: lolo
 * Date: 10.11.15
 * Time: 08:23
 */

require('./config.php');

$pageTitle = 'accueil'
?>


<!DOCTYPE html >
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <meta name="DCTERMS.creator" content="Laurent Moine"/>
    <meta name="DCTERMS.subject" content="démos"/>
    <meta name="DCTERMS.created" content="2015-mm-jj"/>
    <title><?php echo USER_NAME,' | ', $pageTitle  ?></title>
</head>
<body>
<header>
    <h1>Boucherie du Doubs</h1>
</header>

<p>
    <?php echo SLOGAN; ?>
</p>

<p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aut autem eligendi, inventore labore libero minima neque perspiciatis placeat rerum saepe tempora voluptas? Facilis itaque sequi similique unde vero voluptatibus?
</p>
<footer>
    <address>
        <h3>Boucherie du Doubs</h3>
        <a href="mailto:adresse@boucherie.ch">Contact</a>
        Adresse: rue du Doubs 7, 2882 St-Ursanne
        Tel: +41 32 466 78 98
    </address>
</footer>

</body>
</html>