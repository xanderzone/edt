
<?php 
//modèle connexion
	include(dirname(__FILE__).'/../model/connexion.php');
	
	//récupération des id
	$email = $_POST["email"];
	$mdp = md5($_POST["password"]);
	
		// connexion BD
	connectionBD();
	//appel fonction BD
	//include("../control/verifUserBD.php");
	
	
	if(UserExistBD($email, $mdp)==true){
		$typeUser=TypeUser($email, $mdp);
		$_SESSION['login']=$email;
		header ('Location: ../index.php');
	}
	else{
		include('../index.php');
	}
	
	
?>
		
		
		
		
	
	
	
	
	

	
	
	