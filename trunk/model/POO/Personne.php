<?php
    abstract class Personne {
        //attribut
        private $INE;
        private $nom;
        private $prenom;
        private $mail;
        private $password;
        
        
        //constructeur
        public function __construct($num, $n, $pre,$m, $mdp) {
            $this->INE = $num;
            $this->nom = $n;
            $this->prenom = $pre;
            $this->password = $mdp;
            $this->mail = $m;
            ;
        }
        
        public function editMail($newMail){
            $this->mail = $newMail;
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
        public function getMail(){
            return $this->mail;
        }
        
        public abstract function affichePersonne();
        
    }