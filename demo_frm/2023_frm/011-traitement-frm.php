<h3>en GET</h3>
<?php var_dump($_GET); ?>

<h3> en POST</h3>
<?php var_dump($_POST); ?>


<h3>filter la valeur reçue</h3>
<?php
$num = filter_input(INPUT_GET, 'tbx1', FILTER_VALIDATE_INT);
var_dump($num);
?>