<?php

/*
 * Classe ProfesseurNomme
 * hérite de Personne
 * dispose du droit 1 ( modification et creation)
 */

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
