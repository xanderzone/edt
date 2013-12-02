<?php
    class Eleve extends Personne {
        private $groupe;
        
        
        public function __construct($num, $n, $pre, $mdp, $gpe) {
            parent::__construct($num, $n, $pre, $mdp) ;
            $this->groupe = $gpe;
        }
        
        public function getGroupe(){
            return $this->groupe;
        }
        
        
    }