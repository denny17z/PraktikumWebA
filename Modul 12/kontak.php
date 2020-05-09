<?php
    include("koneksi.php");
    include("status.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Website Profil Perpustakaan</title>
	<?php
        if($_SESSION['status'] == 'admin'){
            ?><link rel="stylesheet" type="text/css" href="style.css"><?php
        }elseif ($_SESSION['status'] == 'pengguna') {
            ?><link rel="stylesheet" type="text/css" href="style_pengguna.css"><?php
        }
    ?>
</head>
<body>
	<div id="bagian">
        <div id="top">
            <img src="gambar/index.jpeg" alt="">
            <p><b>Perpustakaan <br>Universitas Udayana</b></p>
        </div>
        <div id="sidebar">
            <img src="gambar/unud.png" alt="">
            <div class="populer">
                <p>Artikel Populer</p>
            </div>
                <ul>
                    <li><a href="#">Buku Membuat Website</a></li>
                    <li><a href="#">Penggunaan CSS</a></li>
                    <li><a href="#">Penggunaan Javacript</a></li>
                </ul>
        </div>
        <div id="menu">
            <?php
                include('menu.php');
            ?>
        </div>
         <div id="isi">
            <h1>Kontak Kami</h1>
            <nav>
                <ul>
                    <li>Nama</li>
                    <li>Nim</li>
                    <li>No. Hp</li>
                </ul>
                <ul>
                    <li>I Putu Denny Indra Putra</li>
                    <li>1708561013</li>
                    <li>08113921008</li>
                </ul>
            </nav>
            <br><br>
        </div>
         <div id="clear"></div>
        <div id="footer">
            <p>Perpustakaan Universitas Udayana</p>
        </div>
    </div>
</body>
</html>