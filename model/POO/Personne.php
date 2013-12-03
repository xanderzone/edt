<?php
    class Personne {
        //attribut
        private $INE;
        private $nom;
        private $prenom;
        private $password;
        
        
        //constructeur
        public function __construct($num, $n, $pre, $mdp) {
            $this->INE = $num;
            $this->nom = $n;
            $this->prenom = $pre;
            $this->password = $mdp;
            ;
        }
        
        public function editPassword($newPass){
            $this->password = $newPass;
            return;
        }
        
        //accesseurs
        public function getNom(){
            return $this->nom;
        }
        
        public function getINE(){
            return $this->INE;
        }
        
        public function getPrenom(){
            return $this->prenom;
        }
    }