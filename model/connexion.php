


<?php
    function connect($email,$Motdepasse){
        if(!empty($email) and !empty($Motdepasse))
        {
            $req = "SELECT Email FROM users WHERE Email='$email' AND Motdepasse='$Motdepasse'";
            $sendreq =mysql_query($req) or die(mysql_error());
            if(mysql_num_rows($sendreq)>0)
            {
                $result=mysql_result($sendreq, 0);
                return $result;
            }
        }
        return false;
    }	
?>
