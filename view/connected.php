<p>
    Bonjour 
    <?php
        switch($_SESSION['droit'])
        { 
        case 0:echo("Administrateur");
            break;
        case 1:echo("Professeur");
            break;
        case 2:echo("Administrateur");
            break;
        }
     ?>
    <a href="./control/deconnexion.php"> Deconnexion </a>
</p>
<p>
    <li>
    <a href="./access.php"> Accès emploi du temps </a>
    </li>
</p>