<?php
require_once 'inc/utils.php';

//r($_POST);

//Récupération et nettoyage des données du formulaire
$name    = strip_tags($_POST['name']);
$email   = strip_tags($_POST['email']);
$message = strip_tags($_POST['message'],'<a><strong>');
$copy    = strip_tags($_POST['copy']);

$errors = [];

$errors[] = 'message';
$errors[] = 'message2';
 
//r($name,$message,$errors);


$pageTitle = "Confirmation";
$section   = "contact";

include 'part/header.php';
?>

<section id="about">
	<h3>Confirmation</h3>

	<p>Bonjour <?php echo $name ?>,
		nous avons bien reçu votre message :</p>
	
	<pre><?php echo $message ?></pre>

	<?php if($copy): ?>
	    <p>Une copie de cet email vous a été envoyé à votre adresse
	    	<em><?php echo $email ?></em>.</p>
    <?php endif; ?>  

    <p>Belle journée !</p>
</section>

<?php include 'part/footer.php'; ?>