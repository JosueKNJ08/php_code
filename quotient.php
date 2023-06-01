<html>
    <form action="quotient.php" method="post">
        <input type="text" name="numerateur">
        <br>
        <input type="text" name="denominateur">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
        $numerateur = $_POST['numerateur'];
        $denominateur = $_POST['denominateur'];
        $quotient = $numerateur / $denominateur;
        $reste = $numerateur % $denominateur;
        if($_POST['ok']){
            echo "le quotient est : ".$quotient. " le reste est :".$reste;
        }
    ?>
</html>