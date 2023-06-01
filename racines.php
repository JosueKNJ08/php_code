<html>
    <form action="racines.php" method="post">
        <input type="text" name="valeurA">
        <input type="text" name="valeurB">
        <input type="text" name="valeurC">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
        $valeurA = $_POST['valeurA'];
        $valeurB = $_POST['valeurB'];
        $valeurC = $_POST['valeurC'];
        if($_POST['ok']){
            if($valeurA == 0){
                echo "la solution est : ".$valeurC / $valeurB;
            }else if($valeurA =! 0){
                $delta = ($valeurB * $valeurB) - 4 * ($valeurA * $valeurC);
                echo $delta;
                if($delta == 0){
                    echo "Le polynome a une racine double : ".-($valeurB)/(2*$valeurA);
                }else if($delta > 0){
                    echo "Les racines sont x1 : ".-$valeurB+sqrt($delta)/(2*$valeurA)." et x2 : ".-$valeurB-sqrt($delta)/(2*$valeurA);
                }else if($delta < 0){
                    echo "Le polynome n'a pas de racine réelle!";
                }
            }
        }
    ?>
</html>