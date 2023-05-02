<?php
/**
 * Created by PhpStorm.
 * User: moinlau
 * Date: 08.05.2018
 * Time: 10:15
 */
?>
<?php include 'view/part/header.view.php'; ?>
<main>
    <!--l'action est sur la même page-->
    <form action="" method="get">
        <p>
            <label for="tbx1">saisir un text</label>
            <input type="text" name="tbx1"  id="tbx1" value="<?php echo $num ?>">
        </p>
        <p>
            <button type="submit" id="btn" name="btnEnvoi" value="btnEnvoi">Envoyer</button>
        </p>
    </form>

    <p>le numéro est <?php echo $num ?></p>
</main>
<?php include 'view/part/footer.view.php'; ?>
