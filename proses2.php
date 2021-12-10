proses2
<?php
if(isset($_GET['Nama']) and isset($_GET['E-mail']))
{
    $nama =$_GET['Nama'];
    $email =$_GET['E-mail'];
}
else
{
    echo "maaf iisi dulu gan<br><br>";
}
if(!empty($nama) ){
    echo "nama: $nama <br/>";
    echo "E-mail: $email";
}
else{
    die("isi nama dulu gann");
}

if(empty($email)){
    die("-");
} 

?>