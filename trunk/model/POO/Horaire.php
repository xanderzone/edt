<?php
    class Horaire{
        private $hd;
        private $hf;
        private $d;
        private $salle;
    
    public function __construct($hd,$d){
        
        $this->hd = $hd;
        $this->d = $d;
        $this->hf = $this->gethf();
        $this->salle = $this->getsalle();
    }
    public function gethf()
    {
        $req = "SELECT HeureFin FROM Cours WHERE 
                date='$this->d' AND
                    HeureDebut='$this->hd'";
        $sendreq = mysql_query($req);
        if(mysql_num_rows($sendreq)>0)
            {
                $result=mysql_result($sendreq, 0);
                return $result;
            }
            else
            {
                return(null);
            }
    }
    
    public function getsalle()
    {
        $req = "SELECT NumSalle FROM Cours WHERE
                date='$this->jour' AND HeureDebut='$this->hd'";
        $sendreq = mysql_query($req);
        if(mysql_num_rows($sendreq)>0)
            {
                $result=mysql_result($sendreq, 0);
                return $result;
            }
            else
            {
                return(null);
            }
                 
    }
    public function affichesalle()
    {
        echo($this->salle);
    }
    public function returnhf()
    {
        return $this->hf;
    }
    }

?>