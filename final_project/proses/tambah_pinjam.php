<?php
include('../koneksi.php');
include('../data.php');
$conn = new Koneksi();
$dat = new Data($conn);

$id_buku = $_POST['id_buku'];
$tgl_pinjam= $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$status = $_POST['status'];
$id_user = $_POST['id_user'];

$tampil = $dat->proses_pinjam($id_buku, $tgl_pinjam, $tgl_kembali, $status, $id_user);
echo "ok";

?>