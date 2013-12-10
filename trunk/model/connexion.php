


<?php
    function connect($ine,$Motdepasse){
        if(!empty($ine) and !empty($Motdepasse))
        {
            $req = "SELECT NumIne FROM Personne WHERE NumIne='$ine' AND Motdepasse='$Motdepasse'";
            $sendreq =mysql_query($req) or die(mysql_error());
            if(mysql_num_rows($sendreq)>0)
            {
                $result=mysql_result($sendreq, 0);
                return $result;
            }
        }
        return false;
    }	
    
    function requestDroit($ine){
        $req= "SELECT Droit FROM Personne WHERE NumIne='$ine'";
        $sendreq= mysql_query($req) or die(mysql_error());
        $result=  mysql_fetch_array($sendreq);
        return $result['Droit'];
        
    }
?>
