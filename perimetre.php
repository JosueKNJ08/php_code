<html>
    <form action="perimetre.php" method="post">
        <input type="text" name="diametre">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
        $diametre = $_POST['diametre'];
        $perimetre = 3.14 * $diametre;
        if($_POST['ok']){
            echo "Le périmètre est : ".$perimetre;
        }
    ?>
</html>