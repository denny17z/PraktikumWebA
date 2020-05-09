<?php
include('koneksi.php');
include('data.php');
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
		
		$_SESSION['nama_pengguna'] = $fetch['nama']; 
		$_SESSION['status']	= $fetch['status'];
			
			if ($fetch['status'] == "admin") {
				$_SESSION['status'] = "admin";
			}else if ($fetch['status'] =="pengguna") {
				$_SESSION['status'] = "pengguna";
			}
				

		echo '<script>document.location="index.php";</script>';
	}

}

?>