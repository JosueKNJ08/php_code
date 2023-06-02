<html>
    <form action="table2.php" method="post">
        <input type="text" name="entree">
        <input type="text" name="nombre">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
        $j = 0;
        $entree = $_POST['entree'];
        $nombre = $_POST['nombre'];
        if($_POST['ok']){
            for($i = 1; $i <= $nombre; $i++){
                $j = $i * $entree;
                echo $i." * ".$entree." = ".$j."<br/>";
            }
        }
    ?>
</html>