<?php
            if($nbjour!=1)
            {
                $jour=day($j);
            }
            $h=new Horaire($i,$jour);
                ?>
                <TD>
                <?php
                echo(consultation($jour, $i,$h->returnhf(), $groupe));
                $h->affichesalle();
                ?>
                </TD>
                <?php
   ?>