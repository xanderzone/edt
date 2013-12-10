<?php
    if(!empty($_SESSION['ine']))
    {
        include("./control/access.php");
        include("./view/visual.php");
    }
    else
    {
        echo("Veuillez vous connecter");
        ?>
            <a href="index.php"> Retour </a>
        <?php
    }
?>

