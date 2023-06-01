<html>
    <form action="pair.php" method="post">
        <input type="text" name="entree">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
        $entree = $_POST['entree'];
        if($_POST['ok']){
            if($entree % 2 == 0){
                echo "Le nombre ".$entree." est pair!";
            }
            else{
                echo "Le nombre ".$entree." est impair!";
            }
        }
    ?>
</html>