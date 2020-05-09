<?php
$user = $_SESSION['nama_pengguna'];
$status = $_SESSION['status'];

if(!isset($_SESSION['status'])){
	echo '<script language="javascript">alert("mohon login terlebih dahulu"); document.location="login.php";</script>';
}
?>