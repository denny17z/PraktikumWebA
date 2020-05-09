<!DOCTYPE html>
<html>
<head>
	<title>LOGIN|Perpustakaan Udayana</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<center>
<div class="login">
	<img src="gambar/unud.png" width="108px">
	<center><h2>ACCOUNT</h2></center>
	<form action="login_proses.php" method="POST">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="teks" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password"></td>
			</tr>
		</table>
		<button type="submit" name="submit" value="Submit">Login</button>
	</form>
</div>
</center>
</body>
</html>