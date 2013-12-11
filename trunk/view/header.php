<!DOCTYPE html>
    <ul id="navbar">
      <li> 
        <a href="index.php"> Accueil </a>
      </li>
      <li>
        <?php
            if(!empty($_SESSION['Ine']))
            {
                include("connected.php");
            }
            else 
            {
                include("notconnected.php");
            }
         ?>
      </li>
    </ul>
