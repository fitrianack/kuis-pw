<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi){
    die("Koneksi Gagal".mysqli_connect_error());
}

$nim = $_POST['nim'];
$nama = $_POST['nama'];

$sql="INSERT INTO mahasiswa values ($nim, "$nama");

$hasil=mysqli_query($koneksi, $sql);

mysqli_close($koneksi);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 w-25">
        <div class="card">
            <form method="POST" action="tambahdata.php">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nim" name="nim" placeholder="NIM...">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama...">
                </div>
                <button type="submit" name="tambah" class="btn btn-primary btn-user btn-block">
                    Tambah
                </button>
            </form>
        </div>
    </div>
</body>

</html>