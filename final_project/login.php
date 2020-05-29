<!DOCTYPE html>
<html>
<head>
	<title>LOGIN|Perpustakaan Udayana</title>
	<link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body>
<center>
<div class="login">
	<img src="gambar/unud.png" width="108px">
	<center><h2>ACCOUNT</h2></center>
	<form id="login_form" method="POST">
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
		<button type="submit" name="submit" id="btn_login" value="Submit">Login</button>
		<a href="daftar.php"><button type="button" name="submit" value="Submit">Daftar</button></a>
		<a href="index.php"><button type="button" name="submit" value="Submit">Kembali</button></a>
		<div id="error" style="margin-top: 10px; color: white"></div>
	</form>
</div>
</center>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script>
    $('document').ready(function()
    { 
         /* validation */
      $("#login_form").validate({
          rules:
       {
       password: {
       	required: true,
       },
       username: {
                required: true,
                },
        },
           messages:
        {
                password:{
                          required: "Masukkan Password Anda"
                         },
                username: "Masukkan Username Anda",
           },
        submitHandler: submitForm 
           });  

       function submitForm()
       {  
       var data = $("#login_form").serialize();

       $.ajax({

       type : 'POST',
       url  : 'proses/login_proses.php',
       data : data,
       beforeSend: function()
       { 
        $("#error").fadeOut();
        $("#btn_login").html('<span class="glyphicon glyphicon-transfer"></span>   Mengirimkan ...');
       },
       success :  function(response)
          {      
         if(response == "ok"){

          $("#btn_login").html('<img src="https://github.com/maulayyacyber/phantom0308/raw/master/btn-ajax-loader.gif" />   Login ...');
          setTimeout(' window.location.href = "index.php"; ',4000);
         }
         else{

          $("#error").fadeIn(1000, function(){   

          $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   username atau password salah!.</div>');
               $("#btn_login").html('<span class="glyphicon glyphicon-log-in"></span>   Login');

           });
          }
         }
       });
        return false;
      }
    });
</script>
</body>
</html>