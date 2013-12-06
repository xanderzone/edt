<!DOCTYPE html>
    <ul id="navbar">
      <li> 
        <a href="index.php"> Accueil </a>
      </li>
      <li>
        <?php
            if(!empty($_SESSION['email']))
            {
                include("connected.php");
            }
            else 
            {
                include("notconnected.php");
            }
         ?>
      </li>
         <?php 
            if(!empty($_SESSION['email']))
            {
                include("access.php");
            }
         ?>
    </ul>
