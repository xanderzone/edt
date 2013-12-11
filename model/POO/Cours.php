<?php
/**
 * methode retournant le nb de cours présent dans la BD
 */
function nbCoursBD(){
                    include("./model/connexionBD");
                    $req = "SELECT COUNT NumCours FROM Cours";
                    $sendreq = mysql_query($req);
                    $result = mysql_fetch_array($sendreq);
                    return $result['NumCours'];
                }
                
/* Classe Cours 
 *
 */             
	class Cours{
		//private $RefCours;
		private $horaireDebut;
		private $horaireFin;
		private $matiere;
		private $groupe;
		private $salle;
		
		
		//constructeur, récupération de la BD
		public function __construct($heureD, $heureF, $mat, $gpe, $sa){
                    $place = nbCoursBD();
                    /* Futur numéro du Cours, on est sur qu'il n'est pas présent
                     * dans la BD
                     */
                    $place = $place + 1;
                    
                    $req = "INSERT INTO Cours(NumCours,NomMatiere,NumSalle,	
                        NumGroupe,HeureDebut,HeureFin)
                        VALUES ($place,$mat,$sa,$gpe,$heureD,$heureF)";
                    $sendreq = mysql_query($req);
                }
			
                       
		
		//setteur crénaux,  recupèration sur la BD
		public function setCrenaux($d, $f){
                    //connexion BD
                    include("./model/connexionBD.php");
                    $reqD = "SELECT HeureDebut,HoraireFin FROM Horaire
                              WHERE HeureDebut = $d AND 
                                  HeureFin = $f";
                    $resD = mysql_query($connect,$reqD)
                            or die("requete heure impossible");
                    $ligneD = mysql_fetch_array($resD);
                    if($d == $ligneD["HeureDebut"]){
                        $this->horaireDebut=$d;
                    }
                    else{
                        echo "horaire début non disponible";
                    }
                   /////////////////////////////////////:
                    //heure fin
                    
                    if($f == $ligneD["HeureFin"]){
                        $this->horaireFin=$f;
                    }
                    else{
                        echo "horaire début non disponible";
                    }
             	
		}
		
		//setter matiere,  recupèration sur la BD
		public function setMatiere($m){
                    //connexion BD
                        include("./model/connexionBD.php");
			$req = "SELECT NomMatiere FROM Matiere 
                                WHERE NomMatiere = $m";
                        $sendreq = mysql_query($req);
                        $ligne = mysql_fetch_array($sendreq);
                        if($m==$ligne["NomMatiere"]){
                             $this->matiere = $m;
                        }
                        else {
                            echo "matiere non dispo";
                        }
                        
		}
		
		//setter groupe, recupèration sur la BD
		public function setGroupe($g){
                      //connexion BD
                        include("./model/connexionBD.php");
			$req = "SELECT numGroupe FROM Groupe
                            WHERE numGroupe=$g";
                        $sendreq = mysql_query($req);
                        $ligne = mysql_fetch_array($sendreq);
                        if($m==$ligne["numGroupe"]){
                             $this->groupe = $g;
                        }
                        else {
                            echo "groupe non dispo";
                        }
                        
                        
                                
		}
		
		//setter salle
		public function setSalle($s){
                    include("./model/connexionBD.php");
			$req = "SELECT numSalle FROM Salle
                            WHERE numSalle=$s";
                        $sendreq = mysql_query($req);
                        $ligne = mysql_fetch_array($sendreq);
                        if($m==$ligne["numSalle"]){
                             $this->salle = $s;
                        }
                        else {
                            echo "salle non dispo";
                        }
			
		}
		
              /*
               * Getteurs, sert à changer un attribut de Cours directeur sur la BD
               */
                
                //commitMatière, placement sur la BD
                public function commitMatiere($m){
                    /* 1.verifie si m est une matiere dans la table matiere
                     * 2.si oui, update matiere;
                     */
                    include("./model/connexionBD.php");
                    
                }
                //commitSalle, , placement sur la BD
                public function commitSalle(){
                    include("./model/connexionBD.php");
                }
                //commitHoraireDebut, , placement sur la BD
                public function commitHoraireDebut(){
                    include("./model/connexionBD.php");
                    
                }
                //commitHoraireFin, , placement sur la BD
                public function commitHoraireFin(){
                    include("./model/connexionBD.php");
                    
                }
                //commitGroupe, , placement sur la BD
                public function commitGroupe(){
                    include("./model/connexionBD.php");
                }
                
                
                
                //afficheurs
                
                public function afficheMatiere(){
                    echo $this->Matiere();
                }
                public function afficheSalle(){
                    echo $this->Salle();
                }
                public function afficheHoraireDebut(){
                    echo $this->HoraireDebut();
                }
                public function afficheHoraireFin(){
                    echo $this->horaireFin();
                }
                public function afficheGroupe(){
                    echo $this->Groupe();
                }
                public function afficheCours(){
                    $this->afficheMatiere();
                    $this->afficheSalle();
                    return;
                }
                
        }
        
        
        
                
?>     


                                