<?php 
 
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jalur = $_POST['jalur'];
 
mysqli_query($koneksi, "UPDATE user SET nama='$nama', alamat='$alamat', jalur='$jalur' WHERE nim='$nim'");
 
header("location:index.php?pesan=update");
?>