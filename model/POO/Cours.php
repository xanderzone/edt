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
			if($d->is_horaire() && $f->is_horaire()){
				$this->heureDebut = $d;
				$this->heureFin = $f;
			}
		}
		
		//setter matiere
		public function setMatiere($m){
			if(is_string($m)){ $this->matiere = $m;}
			else{ $this->matiere ='matiere non valide: no string';}
$req = 
                        $this->matiere = $req;

		}
		
		//setter groupe
		public function setGroupe($g){
			if(is_string($g)){$this->groupe = $g;}
			else{ $this->groupe = 'groupe non valide: no string';}
		}
		
		//setter salle
		public function setSalle($s){
			if(is_int($s)){ $this->salle = $s;}
			else{ $this->salle = 0;}
		}
		
		public function is_cours($c2){
			return ( $this->horaireDebut->equals($c2->horaireDebut) &&
                        $this->groupe->equals($c2->groupe) &&
                        $this->horaireFin->equals($c2->horaireFin) &&
                        $this->matiere->equals($c2->matiere) &&
                        $this->salle->equals($c2->salle));
                }
                
                //accesseurs
                public function getMatiere(){
                    return $this->matiere;
                }
                public function getSalle(){
                    return $this->salle;
                }
                public function getHoraireDebut(){
                    return $this->horaireDebut;
                }
                public function getHoraireFin(){
                    return $this->horaireFin;
                }
                public function getGroupe(){
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
                
                
        }
        
        $cours = new Cours("12h45","12h56","")
                
?>     


                                