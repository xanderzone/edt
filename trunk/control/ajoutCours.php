<?php

//recuperation des valeurs de la view ajout cours
$matiere = $_POST['matiere'];
$gpe = $_POST['groupe'];
$salle = $_POST['salle'];
$date = $_POST['date'];
$heureDebut = $_POST['heureDebut'];
$heureFin = $_POST['heureFin'];

//importation pour le travail objet cours
include("./model/POO/Cours.php");

/* Verification des valeurs récupérer
 * 
 */
//verification heure
$valOK = ($heureDebut>=8 && $heureFin<=18);

//verification matiere existante TODO

//verification groupe existant TODO

//verification salle existante TODO



/* Verification groupe disponible dans les horaires données
 *
 */

include("./model/connextionBD");
$req = "SELECT COUNT NumCours WHERE NumGroupe=$gpe AND
        HeureDebut=$heureDebut AND HeureFin=$heureFin";
$sendreq = mysql_query($req);
$result= mysql_result($sendreq);
$valOK = ($result==0);
//TODO : si valOK est faux, redirection avec l'erreur indiqué


/* Vérification si la salle est disponible dans les horaires données
 * TODO:
 */
$req = "SELECT NumCours FROM Cours WHERE NumSalle=$salle
    AND HeureDebut=$heureDebut AND HeureFin=$heureFin";
$sendreq = mysql_query($req);
$result = mysql_result($sendreq);
$valOK = ($result==0);
//TODO : si valOK est faux, redirection avec l'erreur indiqué





?>