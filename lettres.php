<html>
    <form action="lettres.php" method="post">
        <input type="text" name="entree">
        <input type="submit" name="ok" value="ok">
    </form>
    <?php
        $entree = $_POST['entree'];
        $ascii = ord($entree);
        if($_POST['ok']){
            if(64 < $ascii && $ascii < 91 || 96 < $ascii && $ascii < 123){
                if($ascii == 65 || $ascii == 69 || $ascii == 73 || $ascii == 79 || $ascii == 85 || $ascii == 89 ||
                $ascii == 97 || $ascii == 101 || $ascii == 105 || $ascii == 111 || $ascii == 117 || $ascii == 121){
                    echo $entree." est une voyelle!";
                }else{
                    echo $entree." est une consonne!";
                }
            }
            else{
                echo $entree." n'est pas une lettre!";
            }
        }
    ?>
</html>