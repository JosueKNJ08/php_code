<html>
    <form action="cours.php" method="post">
        <select name="cours" id="select-cours">
            <option value="Formations">Formations</option>
            <option value="PHP">PHP</option>
            <option value="Photoshop">Photoshop</option>
            <option value="Outlook">Outlook</option>
        </select>
        <input type="submit" name="ok" value="prix">
    </form>
    <?php
        $select = $_POST['cours'];
        $jours = 0;
        $tarif = 0;
        switch($select){
            case "PHP":
                $jours = 3;
                $tarif = 350;
                break;
            case "Photoshop":
                $jours = 3;
                $tarif = 300;
                break;
            case "Outlook":
                $jours = 1;
                $tarif = 250;
                break;
        }
        $total = $jours * $tarif;
        if($select != NULL){
            if($jours > 0){
                echo "la formation {$select} vaut {$total} euros";
            }
            else{
                echo "choisissez une formation!";
            }
        }
    ?>
</html>