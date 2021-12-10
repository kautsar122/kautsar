cookie1.php
<?php

$value = 'ahmad';
$value2 = 'ahmad solihin';

setcookie("username",$value);
setcookie("nama_lengkap",$value2, time()+3600);

echo "<h1>halaman penge set cookie</h1>";

echo "<h2>Klik <a href='cookie2.php'>di sini</a> periksa cookie</h2>";



?>