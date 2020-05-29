<?php
include('../koneksi.php');
include('../data.php');
$conn = new Koneksi();
$dat = new Data($conn);

$isbn = $_POST['isbn'];
$judul= $_POST['judul_buku'];
$tahun = $_POST['tahun_buku'];
$stok = $_POST['stok_buku'];
$kategori = $_POST['kategori'];
$id_mc = $_POST['id_mc'];
$id_rak = $_POST['id_rak'];

$tampil = $dat->proses_tambahbuku($isbn,$judul,$tahun,$stok,$kategori,$id_mc,$id_rak);
echo "ok";

?>