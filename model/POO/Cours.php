<?php
	class Cours{
		//private $RefCours;
		private $horaireDebut;
		private $horaireFin;
		private $matiere;
		private $groupe;
		private $salle;
		
		
		//constructeur
		
		public function __construct($heureD, $heureF, $mat, $gpe, $sa){
			$this->setCrenaux($heureD,$heureF);
			$this->setMatiere($mat);
			$this->setGroupe($gpe);
			$this->setSalle($sa);
                        
		}
		
		//setter creanaux horaire
		public function setCrenaux($d, $f){
                    //heure conn
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
		
		//setter matiere
		public function setMatiere($m){
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
		
		//setter groupe
		public function setGroupe($g){
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
		public function is_cours($c2){
			return ( $this->horaireDebut->equals($c2->horaireDebut) &&
                        $this->groupe->equals($c2->groupe) &&
                        $this->horaireFin->equals($c2->horaireFin) &&
                        $this->matiere->equals($c2->matiere) &&
                        $this->salle->equals($c2->salle));
                }*/
                
                //accesseurs
                public function getMatiere($m){
                    /* 1.verifie si m est une matiere dans la table matiere
                     * 2.si oui, update matiere;
                     */
                    include("./model/connexionBD.php");
                    $req = "INSERT INTO Cours
                    return $this->matiere;
                }
                public function getSalle(){
                    include("./model/connexionBD.php");
                    return $this->salle;
                }
                public function getHoraireDebut(){
                    include("./model/connexionBD.php");
                    return $this->horaireDebut;
                }
                public function getHoraireFin(){
                    include("./model/connexionBD.php");
                    return $this->horaireFin;
                }
                public function getGroupe(){
                    include("./model/connexionBD.php");
                    return $this->groupe;
                }
                
                //afficheurs
                
                public function afficheMatiere(){
                    echo $this->getMatiere();
                }
                public function afficheSalle(){
                    echo $this->getSalle();
                }
                public function afficheHoraireDebut(){
                    echo $this->getHoraireDebut();
                }
                public function afficheHoraireFin(){
                    echo $this->horaireFin();
                }
                public function afficheGroupe(){
                    echo $this->getGroupe();
                }
                public function afficheCours(){
                    getMatiere($m);
                    $cours = new Cours(sdgrg);
                }
                
        }
        
        
                
?>     


                                