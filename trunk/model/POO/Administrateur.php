<?php


class Administrateur extends Personne {
    
    public function __construct($num, $n, $pre, $mdp) {
        parent::__construct($num, $n, $pre, $mdp);
    }
    public function affichePersonne() {
        echo  "Administrateur <br> INE :".$this->getINE() ."<br>
            nom: ".$this->getNom() ."<br>
                prenom :" .$this->getPrenom()."<br>
                    mail :" .$this->getMail() ;
    }
    
}
