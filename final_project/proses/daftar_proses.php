<?php
include('../koneksi.php');
include('../data.php');
$conn = new Koneksi();
$dat = new Data($conn);

$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$tlp = $_POST['no_tlp'];
$username = $_POST['username'];
$pass = $_POST['password'];
$id_akses = $_POST['id_akses'];

$tampil = $dat->daftar($nama, $alamat, $tlp, $username, $pass, $id_akses);
echo "ok";
?>