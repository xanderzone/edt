<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <ul id="navbar">
      <li> 
        <a href="index.php"> Accueil </a>
      </li>
      <li>
        <?php
            if(!empty($_SESSION['login']))
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
  </body>
</html>
