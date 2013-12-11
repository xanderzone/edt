<?php
/*
 * Classe Personne 
 * Important ; attribut droit : 
 * droit =0 => Administrateur , création modification consultation
 * droit =1 => Professeur  modification consultation
 * droit =2 => Eleves  consultation
 */
    abstract class Personne {
        //attribut
        protected $INE;
        protected $nom;
        protected $prenom;
        protected $mail;
        protected $password;
        protected $droit; // Droit : 0=Admin; 1=Prof; 2=Eleve; 
        
        
        //constructeur
        public function __construct($num, $n, $pre,$m, $mdp) {
            $req = 
            $this->INE = $num;
            $this->nom = $n;
            $this->prenom = $pre;
            $this->password = $mdp;
            $this->mail = $m;
            // droit défini dans les classes héritantes
        }
        
        
       
        
          //setNum, vérifie le Numéro IDE sur la BD, et affecte l'attribut
    public function setNum($num){
        include("./model/connexionBD.php");
        $req = "SELECT NumIne FROM Personne
                WHERE NumIne=$num";
        $sendreq = mysql_query($req);
        $ligne = mysql_fetch_array($sendreq);
        if($m==$ligne["NumIne"]){
            $this->INE = $num;
            }
            else {
                echo "Numéro INE non dispo";
            }
    }
    
    //setNom, vérifie le nom de la personne, affecte l'attribut
    public function setNom($n){
        include("./model/connexionBD.php");
        $req = "SELECT NomPersonne FROM Personne
                WHERE NomPersonne=$n";
        $sendreq = mysql_query($req);
        $ligne = mysql_fetch_array($sendreq);
        if($m==$ligne["NomPersonne"]){
            $this->nom = $n;
            }
            else {
                echo "Nom non dispo";
            }
    }
        //accesseurs
        public function commitNom(){
   
        }
        
        public function commitINE(){
            
        }
        
        public function commitPrenom(){
           
        }
        public function commitMail(){
           
        }
        
        public abstract function affichePersonne();
        
    }