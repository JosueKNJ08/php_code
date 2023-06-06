<html>
    <form action="compteur.php" method="post">
        <input type="text" name="entree">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
    $entree = $_POST['entree'];
        if($_POST['ok']){
            echo $entree." contient ".strlen($entree)." caractères!";
        }
    ?>
</html>