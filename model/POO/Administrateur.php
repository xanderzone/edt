<?php

/*
 * Classe Administateur
 *  hérite de Personne,
 *  dispose de tout les droits de modifications ( droit 0) 
 */
class Administrateur extends Personne {
    
    public function __construct($num, $n, $pre, $mdp) {
        parent::__construct($num, $n, $pre, $mdp);
        $this->droit=0;
    }
    
  
     
    public function affichePersonne() {
        echo  "Administrateur <br> INE :".$this->getINE() ."<br>
            nom: ".$this->getNom() ."<br>
                prenom :" .$this->getPrenom()."<br>
                    mail :" .$this->getMail() ;
    }
    
}
