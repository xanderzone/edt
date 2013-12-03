


<?php
	
	function connexion(){


		$ok=false;
		if(!empty($identifiant) and !empty($mdp) ):
			$req = "Select * FROM Users WHERE identifiant='$identifiant' and mdp='$mdp'";
			$ok =mysql_query($req) or die(mysql_error());
		endif;
	}
?>
