<?php
include("/POO/Cours.php");
/*$jour=$_POST['jour'];
    $horairedebut=$_POST['horairedebut'];
    $horairefin=$_POST['horairefin'];
    $groupe=$_POST['groupe'];

*/

 function consultation($d, $hd, $hf,$gp){
        include("./model/connexionBD.php");
        $req = "SELECT * FROM Cours WHERE 
                date=$d AND
                    HeureDebut>=$hd AND
                        HeureFin<=$hf AND
                            NumGroupe=$pg";
        $sendreq = mysql_query($req);
        $result = mysql_fetch_array($sendreq);
        
        $edt = array();
        
        foreach ($result as $key=>$value){
            foreach ($value as $i){
                
            }
            
        }
    }












?>