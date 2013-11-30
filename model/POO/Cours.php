<?php
	public class Cours{
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
			return ( $this->horaireDebut->equals($c2->horaireDebut)