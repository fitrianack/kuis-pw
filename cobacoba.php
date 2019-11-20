<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

//query SQL
$cari = "SELECT * FROM login WHERE username='$_POST['username']' AND password='$_POST['password']' ";

$hasil = mysqli_query($koneksi, $cari);

if($hasil->mysqli_num_row>0){
    echo "Login berhasil";
}else{
    header('Location : daftar.php');
}
mysqli_close($koneksi);

?> 