<?php
require_once 'inc/utils.php';
require_once  MODEL_DIR . 'portfolio.php';

//$url = 'http://' . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];

$pageTitle = "Contact";
$section   = "contact";

include 'part/header.php';
?>
<section id="col1">
	<h3>General Information</h3>

	<p>I am not currently looking for new design work, but I am available for speaking gigs and similar engagements. If you have any questions, please don't hesitate to contact me!</p>

	<p>Please only use phone contact for urgent inquiries. Otherwise, Twitter and email are the best way to reach me.</p>

	<hr>

	<h4>Mes réalisations</h4>
	<ul>
		<?php
		foreach($portfolio as $key => $work) :
            ?><li>
            <a href="work.php?id=<?php echo $key ?>"
               title="Voir <?php echo $work['titre'] ?>">
               <?php echo $work['titre'] ?>
            </a>
            </li><?php
        endforeach; ?>
	</ul>
</section><section id="col2">
	<h3>Contact Details</h3>

	<ul class="contact-info">
		<li class="tel"><a href="<?php echo USER_TEL?>"><?php echo USER_TEL?></a></li>

		<li class="mail"><a href="<?php echo USER_EMAIL ?>"><?php echo USER_EMAIL ?></a></li>

		<li class="twitter"><a href="http://twitter.com/intent/tweet?screen_name=<?php echo USER_TWITTER ?>">@<?php echo USER_TWITTER ?></a></li>
	</ul>

	<form name="form-message" action="confirm.php" method="post">
		<div>
			<label for="name">Name</label>
			<input name="name" id="name" type="text">
		</div>
		<div>
			<label for="email">Email</label>
			<input name="email" id="email" type="email">
		</div>
		<div>
			<label for="message">Message</label>
			<textarea name="message" id="message"></textarea>
		</div>
		<div>
			<input name="copy" id="copy" type="checkbox">
			<label for="copy">Send me a copy of this email.</label>
		</div>
		<div>
			<input name="submit" type="submit" value="Send message">
		</div>
	</form>

</section>
<?php include 'part/footer.php' ?>