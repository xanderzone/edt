<?php
    include("../model/connexionBD.php");
    include("../model/connexion.php");
    $email=$_POST['email'];
    $password=$_POST['password'];
    $res=connect($email,$password);
    if($res==$email)
    {
        session_start();
        $_SESSION['email']=$res;
        echo("Connecté en tant que ");echo($res);
    }
    else
    {
    echo("Connexion echouée");
    }
?>
<a href="../index.php"> Retour </a>
    