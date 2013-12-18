<?php

 function consultation($d, $hd, $hf,$gp){
        $req = "SELECT NomMatiere FROM Cours WHERE 
                date='$d' AND
                    HeureDebut='$hd' AND
                        HeureFin='$hf'";
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
 
 
 function day($day){
     switch($day)
                { 
                    case 0:return("Lundi");
                        break;
                    case 1:return("Mardi");
                        break;
                    case 2:return("Mercredi");
                        break;
                    case 3:return("Jeudi");
                        break;
                    case 4:return("Vendredi");
                }
 }

?>