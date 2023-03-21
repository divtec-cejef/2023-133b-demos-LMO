<?php
require_once 'inc/config.php';

$pageTitle = "Accueil";
$section   = "home";

include 'part/header.php';
?>
<section>
	<h2 class="cache">Mes réalisations</h2>
	<ul id="gallerie">
		<?php
		foreach($portfolio as $key => $work) :
            ?><li>
            <a href="work.php?id=<?php echo $key ?>"
               title="Voir <?php echo $work['titre'] ?>">
                <img src="<?php echo PORTFOLIO_URL . $work['image'] ?>"
                     alt="<?php echo $work['titre'] ?>"/>

                <p><?php echo $work['description'] ?></p>
            </a>
            </li><?php
        endforeach; ?>
	</ul>
</section> <!-- fin section principale -->
<?php include 'part/footer.php' ?>
