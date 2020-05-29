<!DOCTYPE html>
<html>
<head>
	<title>DAFTAR|Perpustakaan Udayana</title>
	<link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body>
<center>
<div class="login">
	<img src="gambar/unud.png" width="108px">
	<center><h2>BUAT ACCOUNT</h2></center>
	<form id="data_input" method="POST">
		<table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama" id="nama"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea cols="17" rows="5" name="alamat" id="alamat" style="margin-top: 16px;"></textarea></td>
      </tr>
      <tr>
        <td>No Telp.</td>
        <td>:</td>
        <td><input type="text" name="no_tlp" id="no_tlp"></td>
      </tr>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" id="username" ></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" id="password" ></td>
      </tr>
      <tr>
        <td>ID akses</td>
        <td>:</td>
        <td><input type="text" name="id_akses" value="3" id="id_akses" readonly ></td>
      </tr>
		</table>
    <div style="">
      <button type="submit" name="submit" id="btn_daftar"> Daftar</button>
      <a href="login.php"><button type="button"> Batal</button></a>
        <!-- <button type="submit" name="submit" id="btn_daftar" value="Submit">Daftar</button><br>
        <a href="index.php"><button type="button" name="kembali">Kembali</button></a> -->
    </div>
    
	</form>
</div>
</center>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#btn_daftar").click(function(){
      var data = $('#data_input').serialize();
      $.ajax({
        type: 'POST',
        url: "proses/daftar_proses.php",
        data: data,
        success: function() {
          console.log(response);
        }
      });
    });
  });
  </script>
</body>
</html>