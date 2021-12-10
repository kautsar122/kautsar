tangkap,php
<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="proses.php">
        <p>nama: <input type="text" name="Nama"></p>
        <p>Alamat <input type="text" name="Alamat"></p>
        <p><input type="submit" value="proses" name="submit"></p>
    </form>
<?php
    $v1 = $_GET['v1'];
    $v2 = $_GET['v2'];
    echo $v1 ."dan". $v2;
?>

</body>
</html>