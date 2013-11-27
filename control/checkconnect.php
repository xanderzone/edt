<?php 
	
	//récupération des id
	$email = $_POST["email"];
	$mdp = md5($_POST["password"]);
	
		// connexion BD
	include('connexionBD.php');
	
	//appel fonction BD
	include("verifUserBD.php");
	
	if(UserExistBD($email, $mdp)==true){
		$typeUser=TypeUser($email, $mdp);
		$_SESSION['login']=$email;
		header ('Location: index.php');
	}
	else{
		include('../index.php');
	}
	
?>
		
		
		
		
	
	
	
	
	

	
	
	