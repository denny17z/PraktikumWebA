<?php 
include 'koneksi.php';
$nim = $_GET['nim'];
mysqli_query($koneksi, "DELETE FROM user WHERE nim='$nim'")or die(mysqli_error());
 
header("location:index.php?pesan=hapus");
?>