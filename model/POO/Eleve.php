<?php
    class Eleve extends Personne {
        private $groupe;
        
        
        public function __construct($num, $n, $pre, $mdp, $gpe) {
            parent::__construct($num, $n, $pre, $mdp) ;
            $this->groupe = $gpe;
        }
        public
        public function getGroupe(){
            return $this->groupe;
        }
        
        public function affichePersonne() {
        echo  "Eleve <br> INE :".$this->getINE() ."<br>
            nom: ".$this->getNom() ."<br>
                prenom :" .$this->getPrenom()."<br>
                    mail :" .$this->getMail() ;
    }
        
        
    }