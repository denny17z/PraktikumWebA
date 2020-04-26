<?php 
	include 'koneksi.php';
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jalur = $_POST['jalur'];
	 
	mysqli_query($koneksi, "INSERT INTO user VALUES('','$nama','$alamat','$jalur')");
	 
	header("location:index.php?pesan=input");
?>