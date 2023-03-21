<!DOCTYPE html >
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="DCTERMS.creator" content="Prénom Nom" />
  <meta name="DCTERMS.subject" content="Thème" />
  <meta name="DCTERMS.created" content="aaaa-mm-jj" />
  <title>démo rémanance</title>
</head>
<body>
	
<?php
    if (!empty($_POST['v_nom']) && !empty($_POST['v_prenom'])) {
        echo '<p>Bonjour ', $_POST['v_prenom'], ' ', $_POST['v_nom'], '</p>';
    } 
    else {
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <p>
                <label>Prénom * : </label>
                <input type="text" name="v_prenom"
                       value="<?php
                                    if (!empty($_POST['v_prenom']))
                                        echo $_POST['v_prenom'];
                              ?>"
                />
            </p>
            <p>
                <label>Nom *: </label>
                <input type="text" name="v_nom"
                       value="<?php
                                    if (!empty($_POST['v_nom']))
                                        echo $_POST['v_nom'];
                              ?>"
                />
            </p>
            <p>
                <button type="submit">Envoyer</button>
            </p>
        </form>
        <?php
    }
?>

A ajouter pour XSS hacking: <br>
&lt;script&gt;alert('hacked')&lt;/script&gt; <br>
&lt;script&gt;window.location.assign("http://esig.moinau.ch")&lt;/script&gt; <br>

</body>

</html>
