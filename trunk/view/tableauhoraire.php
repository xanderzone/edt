<TR> 
    <TD>
    <?php
    echo("$i");
    ?>
    </TD>
    <?php
    for($j=0;$j<$nb;$j++)
    {
        ?>
        <TD>
            <?php
                cours.afficheCours();
            ?>
        </TD>
        <?php
    }
    ?>
</TR>