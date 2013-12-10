<?php
    abstract class Personne {
        //attribut
        protected $INE;
        protected $nom;
        protected $prenom;
        protected $mail;
        protected $password;
        protected $droit; // Droit : 0=Admin; 1=Prof; 2=Eleve; 
        
        
        //constructeur
        public function __construct($num, $n, $pre,$m, $mdp, $droit) {
            $req = 
            $this->INE = $num;
            $this->nom = $n;
            $this->prenom = $pre;
            $this->password = $mdp;
            $this->mail = $m;
            $this->droit=$droit;
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