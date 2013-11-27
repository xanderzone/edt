<?php
  $hostname="infolimon"; //infolimon
  $login="chantonj"; //login iut
  $passwd="lolopopo"; // votre passwd
  $base="chantonj"; //login iut
  $email=$_POST("email");
  $password=$_POST("password");
  $connect = mysql_connect($hostname,$login,$passwd) or die ("Erreur de connexion");
  mysql_select_db($base,$connect) or die ("Erreur de connexion base");
  $req = "SELECT email FROM connexion WHERE email=$email";
  $result=mysql_query($req) or die("Erreur requete");
  if(!empty($result))
  {
    $req2="SELECT email FROM connexion WHERE password=$password";
    if($req2==$req)
    {
      session_start();
      header("../index.php");
    }
    else
    {
      echo("Connexion échoué");
    }
  }
?>
