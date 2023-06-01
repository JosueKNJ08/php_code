<html>
    <form action="entier.php" method="post">
        <input type="text" name="valeur">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
        if($_POST['ok']){
            echo $_POST['valeur'];
        }
    ?>
</html>