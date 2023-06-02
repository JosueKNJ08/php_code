<html>
    <form action="table.php" method="post">
        <input type="text" name="entree">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
        $j = 0;
        $entree = $_POST['entree'];
        if($_POST['ok']){
            for($i = 1; $i <= 10; $i++){
                $j = $i * $entree;
                echo $i." * ".$entree." = ".$j."<br/>";
            }
        }
    ?>
</html>