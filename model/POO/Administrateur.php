<?php


class Administrateur extends Personne {
    
    public function __construct($num, $n, $pre, $mdp) {
        parent::__construct($num, $n, $pre, $mdp);
        $this->droit=0;
    }
    
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
     
    public function affichePersonne() {
        echo  "Administrateur <br> INE :".$this->getINE() ."<br>
            nom: ".$this->getNom() ."<br>
                prenom :" .$this->getPrenom()."<br>
                    mail :" .$this->getMail() ;
    }
    
}
