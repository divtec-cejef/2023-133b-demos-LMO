<?php
//démarrer la session PHP
session_start();
?>

<h1>liste des valeurs dans la session</h1>

<p>
    <?php
    if(isset($_SESSION['fr'])):
        echo $_SESSION['fr'];
    endif;
    ?>

    <!--avec une ternaire-->
    <?php echo $_SESSION['fr'] ?? "rien"; ?>

    <?php echo  isset($_SESSION['fr'])? $_SESSION['fr']:"rien"; ?>

</p>

<a href="p4_effacer.php">effacer la session</a>


