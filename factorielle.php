<html>
    <form action="factorielle.php" method="post">
        <input type="text" name="entree">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
    $entree = $_POST['entree'];
    $j = 1;
        if($_POST['ok']){
            if($entree < 0){
                echo "Le factorielle d'un nombre négatif n'existe pas!";
            }else if($entree == 0){
                echo $j;
            }else if($entree > 0){
                for($i = $entree; $i > 1; $i--){
                    $j = $j * $i;
                }
                echo "Le factorielle de ".$entree." est ".$j;
            }
        }
    ?>
</html>