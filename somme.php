<html>
    <form action="somme.php" method="post">
        <input type="text" name="somme">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
        $somme = $_POST['somme'];
        $j = 0;
        if($_POST['ok']){
            for($i = 1; $i <= $somme; $i++){
                $j = $j + $i;
            }
            echo "La somme des entiers entre 1 et ".$somme." vaut ".$j;
        }
    ?>
</html>