<?php
    include("../model/connexionBD.php");
    include("../model/connexion.php");
    $ine=$_POST['Ine'];
    $password=$_POST['password'];
    $res=connect($ine,$password);
    if($res==$ine)
    {
        session_start();
        $_SESSION['Ine']=$res;
        $_SESSION['droit']=requestDroit($ine);
        echo("Connecté en tant que ");
        switch($_SESSION['droit'])
        { 
        case 0:echo("Administrateur");
            break;
        case 1:echo("Professeur");
            break;
        case 2:echo("Administrateur");
            break;
        defaut:echo("Erreur de session droit");
        }
    }
    else
    {
    echo("Connexion echouée");
    }
?>
<a href="../index.php"> Retour </a>
    