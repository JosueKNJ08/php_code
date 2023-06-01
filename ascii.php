<html>
    <form action="ascii.php" method="post">
        <input type="text" name="ascii">
        <input type="submit" name="ok" value="ok">
    </form>
</html>
<?php
    $ascii = $_POST['ascii'];
    if($_POST['ok']){
        echo ord($ascii);
    }
?>