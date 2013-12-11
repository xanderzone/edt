<?php
class Matiere{
    private $matiere;
    
    public function __construct($mat) {
        include("./model/connexionBD.php");
        $req = "SELECT NomMatiere FROM Matiere WHERE NomMatiere = $mat";
        $sendreq = mysql_query($req);
        $result = mysql_fetch_array($sendreq);
        $this->matiere = $result['NomMatiere'];
    }
}