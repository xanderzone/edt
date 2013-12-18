<!DOCTYPE html>
<html>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <head>
    <meta charset="utf-8" />
    <title>Accès edt</title>
  </head>
  <body>
      <?php
        session_start();
        if(!empty($_SESSION['Ine']))
        {
            include("view/access.php");
        }
        else
        {
            echo("Veuillez vous connecter");
            ?>
            <a href="index.php"> Retour </a>
            <?php
        }
       ?>
  </body>
</html>

 