<?php
include('../koneksi.php');
include('../data.php');
$conn = new Koneksi();
$dat = new Data($conn);

if (isset($_POST['submit'])) {

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$data = $dat->login($user,$pass);
    $fetch = mysqli_fetch_assoc($data);
	if ($fetch==0) {
		echo '<script language="javascript">alert("Username dan Password belum terdaftar!"); document.location="login.php";</script>';
	}else{
		echo "ok";
		$_SESSION['id_user'] = $fetch['id_user'];
		$_SESSION['nama_pengguna'] = $fetch['nama']; 
		$_SESSION['status']	= $fetch['nama_akses'];
			
			if ($fetch['status'] == "Super Admin") {
				$_SESSION['status'] = "Super Admin";
			}elseif ($fetch['status'] =="Admin") {
				$_SESSION['status'] = "Admin";
			}elseif ($fetch['status'] =="User") {
				$_SESSION['status'] = "User";
			}
		// echo '<script>document.location="../index.php";</script>';
		}
	}
?>