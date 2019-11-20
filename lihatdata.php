<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi){
    die("Koneksi Gagal".mysqli_connect_error());
}

$sql="SELECT * FROM mahasiswa";

$hasil=mysqli_query($koneksi, $sql);

if(mysqli_num_row($hasil)>0){
    while ($row = mysqli_fetch_assoc($hasil){
        echo "NIM   : ".$row['nim']."<br>";
        echo "Nama  : ".$row['nama']."<br>";
    }
}else{
    echo "0 rhasil";
}
mysqli_close($koneksi);

echo "<a href="tambahdata.php">[+] Tambah Data</a>";
?>
