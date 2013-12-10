<?php

class ProfesseurNomme extends Personne{
    public function __construct($num, $n, $pre, $m, $mdp) {
        parent::__construct($num, $n, $pre, $m, $mdp);
        $this->droit=1; 
    }
    public function affichePersonne() {
        echo  "Professeur nommé <br> INE :".$this->getINE() ."<br>
            nom: ".$this->getNom() ."<br>
                prenom :" .$this->getPrenom()."<br>
                    mail :" .$this->getMail() ;
    }
    
    
    
   
}
