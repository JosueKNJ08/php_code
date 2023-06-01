<html>
    <form action="bissextil.php" method="post">
        <input type="text" name="annee">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
    $annee = $_POST['annee'];
        if($_POST['ok']){
            if($annee % 100 == 0 || $annee % 4 == 0 || $annee % 400 == 0){
                echo "l'année ".$annee." est bissextil!";
            }else{
                echo "l'année ".$annee." n'est pas bissextil!";
            }
        }
    ?>
</html>