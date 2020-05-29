<?php
include('../koneksi.php');
include('../data.php');
$conn = new Koneksi();
$dat = new Data($conn);

if($_POST['type'] == 'update_pinjam'){
 $id_peminjaman=$_POST['id_peminjaman'];
 $id_buku = $_POST['id_buku'];
 // echo $id_buku;
 $tampil = $dat->proses_setuju($id_peminjaman,$id_buku);
 // echo "ok";
}
if($_POST['type'] == 'update_tolak'){
 $id_peminjaman=$_POST['id_peminjaman'];
 $tampil = $dat->proses_tolak($id_peminjaman);
 echo "ok";
}
// $id_peminjaman=$_POST['terima'];

// echo "ok";

?>