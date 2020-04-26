<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praktikum";

	$koneksi = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($koneksi, "praktikum");
?>