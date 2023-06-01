<html>
    <form action="inverse.php" method="post">
        <input type="text" name="variableA">
        <br>
        <input type="text" name="variableB">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php 
        $variableA = $_POST['variableA'];
        $variableB = $_POST['variableB'];
        if($_POST['ok']){
            echo "valeurA : ".$variableA." et valeurB : \n".$variableB;
            $tmp = $variableA;
            $variableA = $variableB;
            $variableB = $tmp;
            echo " valeurA : ".$variableA." et valeurB : ".$variableB;
        }
    ?>
</html>