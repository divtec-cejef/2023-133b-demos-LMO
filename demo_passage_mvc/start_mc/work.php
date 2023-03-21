<?php
require_once 'inc/config.php';

//Récupération paramètres d'URL
$id = (int) $_GET['id'];

$work = [];
$pageTitle = "Tableau introuvable !";
$section   = "artwork";

if($id AND array_key_exists($id, $portfolio)) {
	$work = $portfolio[$id];
	$pageTitle = $work['titre'];
}

include 'part/header.php'; ?>

<section>
		<?php if(!empty($work)) : ?>
			<h3><?php echo $work['titre'] ?>|
				<small><a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Retour</a></small>
			</h3>
			<figure>
				<?php if(is_file(PORTFOLIO_DIR . $work['image'])) : ?>
                    <img src="<?php echo PORTFOLIO_URL . $work['image'] ?>"
                         alt="<?php echo $work['titre'] ?>"/>
                <?php else : ?>
                    <img src="<?php echo IMG_URL . 'none.png' ?>"
                         alt="Image introuvable"/>
                <?php endif; ?>

				<figcaption><?php echo $work['description'] ?></figcaption>
			</figure>
		<?php else : ?>
			<h3>Pas de chance, ce tabelau a été dérobé durant la nuit !</h3>
		<?php endif; ?>
</section>

<?php include 'part/footer.php' ?>
