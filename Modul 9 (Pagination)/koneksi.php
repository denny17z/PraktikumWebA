<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tb_praktikum";

	$koneksi = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($koneksi, "tb_praktikum");
?>
