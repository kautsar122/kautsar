cookie2.php
<?php
if(isset($_COOKIE['username'])){
    echo "<h1>cookie 'username' ada. isinya : " . $_COOKIE['username']."</h1>";
} else{
    echo "<h1>cookie 'username' gaada</h1>";
}

if(isset($_COOKIE['nama_lengkap'])){
    echo "<h1>cookie 'namalengkap' ada. isinya : " . $_COOKIE['nama_lengkap']."</h1>";
} else{
    echo "<h1>cookie 'namalengkap' gaada</h1>";
}

echo "<h2>klik <a href = cookie01.php>disini</a> untuk menciptakan cookie </h2> "

?>