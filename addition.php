<html>
    <form action="addition.php" method="post">
        <input type="text" name="valeurA">
        <br>
        <input type="text" name="valeurB">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
        $valeurA = $_POST['valeurA'];
        $valeurB = $_POST['valeurB'];
        if($_POST['ok']){
            echo $valeurA + $valeurB;
        }
    ?>
</html>