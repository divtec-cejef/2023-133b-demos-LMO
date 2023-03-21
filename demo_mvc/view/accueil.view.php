<?php
/**
 * Created by PhpStorm.
 * User: moinlau
 * Date: 08.05.2018
 * Time: 10:15
 */
?>
<?php include VIEW_PART_DIR . 'header.view.php'; ?>
<main>
    <ul>
        <?php foreach ($datas as $key => $pers): ?>
            <li><?php echo $pers['nom']; ?></li>
        <?php endforeach; ?>
    </ul>
</main>
<?php include VIEW_PART_DIR . 'footer.view.php'; ?>
